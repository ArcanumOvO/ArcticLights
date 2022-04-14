<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserProfileRequest;
use App\Models\Document;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     * Посредник для доступа к ЛК для авторизованных
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Главная страница личного кабинета.
     * @return Application|Factory|View
     * @throws BindingResolutionException
     */
    public function index()
    {
        if (Auth::user()->hasRole('admin')) {
            return redirect(route('admin.dashboard'));
        }
        return view('dashboard.home');
    }

    /**
     * Страница редактирования профиля
     * @return Application|Factory|View
     */
    public function profile()
    {
        return view('dashboard.profile');
    }

    /**
     * Список документов
     * @return Application|Factory|View
     */
    public function documents()
    {
        $aDocuments = Document::all();
        foreach ($aDocuments as &$oDocument) {
            $sFilePath = asset('storage/' . current(json_decode($oDocument->url, true))['download_link']);
            $oDocument->url = $sFilePath;
            $oDocument->extension = pathinfo($sFilePath, PATHINFO_EXTENSION);
        }
        return view('dashboard.documents', compact('aDocuments'));
    }


    /**
     * POST для сохранения профиля
     * @param UserProfileRequest $oRequest
     * @return JsonResponse
     */
    public function saveProfile(UserProfileRequest $oRequest)
    {
        return Auth::user()->update($oRequest->validated()) ?
            response()->json([
                'success' => true,
                'message' => 'Данные успешно сохранены'
            ])
            : response()->json([
                'success' => true,
                'message' => 'При обновлении данных произошла ошибка'
            ]);
    }

}
