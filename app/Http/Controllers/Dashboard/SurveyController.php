<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Survey;
use App\Models\User;
use App\Rules\Phone;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\StreamedResponse;

class SurveyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Surveys list
     * @return Application|Factory|View
     */
    public function index()
    {
        $validator = Validator::make(Auth::user()->toArray(), [
            'name' => 'required|regex:/[A-Za-zА-Яа-яЁё\s-]/iu',
            'email' => 'required|email',
            'last_name' => 'required|regex:/[A-Za-zА-Яа-яЁё\s-]/iu',
            'phone' => ['required', 'string', app(Phone::class)],
            'weight' => 'required|numeric|min:0',
            'height' => 'required|numeric|min:0',
            'sex' => ['required', Rule::in(['m', 'f'])],
            'birthday' => 'required|date',
            'root' => 'required|boolean',
            'stay' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return redirect(route('profile'))
                ->withErrors($validator)
                ->withInput();
        }
        $aIncompleteSurveys = Survey::getIncomplete(Auth::id());
        $aCompleteSurveys   = Survey::getComplete(Auth::id());
        return view('surveys.list', compact('aIncompleteSurveys', 'aCompleteSurveys'));
    }

    /**
     * Survey single
     * @param Survey $survey
     * @return Application|Factory|View
     */
    public function show(Survey $survey)
    {
        $sUrlParams = http_build_query([
            'user_id' => Auth::id(),
            'user_role' => Auth::user()->role->name,
        ]);
        return view('surveys.single', ['oSurvey' => $survey, 'sUrlParams' => $sUrlParams]);
    }

    /**
     * Survey result
     * @param Survey $survey
     * @return Application|Factory|View
     */
    public function showSingleResult(Survey $survey)
    {
        $oUsersSurveysCollection      = Auth::user()
            ->surveys()
            ->where('result_id', '>', 0)
            ->select(['id'])
            ->get();
        $oUsersSurveysId              = $oUsersSurveysCollection->pluck('id');
        $oUnresolvedSurveysCollection = Survey::query()
            ->whereKeyNot($oUsersSurveysId->all())
            ->inRandomOrder()
            ->limit(3)
            ->get();
        $result                       = Auth::user()->role->name == 'respondent' ? false : $survey->result_id;
        return view('surveys.result.single', compact('oSurvey', 'result', 'oUnresolvedSurveysCollection'));
    }

    /**
     * @return Application|Factory|View
     */
    public function showIndexResult()
    {
        $oSurveysCollection = Survey::getComplete(Auth::id());
        return view('surveys.result.list', compact('oSurveysCollection'));
    }


    /**
     * @param Request $request
     * @return RedirectResponse|StreamedResponse
     */
    public function obtainResult(Request $request)
    {
        $file = $request->file('result');
        if (empty($file) || !$file->isValid()) {
            return redirect()->back();
        }
        $fileContent  = [];
        $fileResource = fopen($file->path(), 'r+');
        while ($data = fgetcsv($fileResource)) {
            $fileContent[] = $data;
        }
        array_shift($fileContent);

        $answersId = array_column($fileContent, 0);
        $users     = User::query()
            ->join('survey_user', 'users.id', '=', 'survey_user.user_id')
            ->whereIn('survey_user.result_id', $answersId)
            ->get([
                'name',
                'last_name',
                'email',
                'phone',
                'height',
                'weight',
                'sex',
                'birthday',
                'stay',
                'root',
                'result',
                'result_id',
            ]);
        $headers   = [
            'Content-type' => 'application/csv; charset=UTF-8',
            'Content-Disposition' => 'attachment; filename=survey_user.csv',
            'Pragma' => 'no-cache',
            'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
            'Expires' => '0'
        ];
        $columns   = [
            'Имя',
            'Фамилия',
            'Email',
            'Номер телефона',
            'Рост (в кг)',
            'Вес (в см)',
            'Пол',
            'Дата рождения',
            'стаж проживания в условиях Арктики',
            'Коренной житель',
            'Результат анкетирования',
            'Идентификатор ответа',
        ];

        $callback = function () use ($users, $columns) {
            $export = fopen('php://output', 'w');
            fprintf($export, chr(0xEF).chr(0xBB).chr(0xBF));
            $separator = ';';

            fputcsv($export, $columns, $separator);
            foreach ($users->toArray() as $user) {
                fputcsv($export, $user, $separator);
            }
            fclose($export);
        };

        return response()->stream($callback, Response::HTTP_OK, $headers);
    }
}
