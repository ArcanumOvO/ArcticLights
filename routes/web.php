<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\Admin\AdminDashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\SurveyController;
use App\Models\Voyager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes([
    'logout' => false,
]);

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/news/{post}', [NewsController::class, 'show']);
Route::get('/news/', [NewsController::class, 'index'])->name('news');


Route::group(['prefix' => 'admin'], function () {
    app(Voyager::class)->routes();
});

Route::get('/', [HomeController::class, 'frontpage'])->name('frontpage');
Route::get('/about', [HomeController::class, 'getEmployees'])->name('about');
Route::get('/press', function () {
    return view('press');
});
Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/confident', function () {
    return view('confident');
});

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/dashboard/export', [AdminDashboardController::class, 'export'])->name('admin.dashboard.export');
    Route::post('/admin/surveys/obtainResult', [SurveyController::class, 'obtainResult'])->name('admin.surveys.obtainResult');
});


Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/documents', [DashboardController::class, 'documents'])->name('documents');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
    Route::post('/profile', [DashboardController::class, 'saveProfile'])->name('saveProfile');
    Route::prefix('surveys')->name('survey.')->group(function () {
        Route::get('/', [SurveyController::class, 'index'])->name('index');
        Route::get('/{survey}', [SurveyController::class, 'show'])->name('single');
        Route::prefix('result')->name('result.')->group(function () {
            Route::get('/', [SurveyController::class, 'showIndexResult'])->name('index');
            Route::post('/export', [SurveyController::class, 'exportSurveysResult'])->name('export');
            Route::get('/{survey}', [SurveyController::class, 'showSingleResult'])
                ->missing(function () {
                    return Redirect::route('survey.result.index');
                })
                ->name('single');
        });
    });
});
