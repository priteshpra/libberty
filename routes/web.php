<?php

use App\Http\Controllers\Backend\LeadsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\AdminsController;
use App\Http\Controllers\Backend\Auth\ForgotPasswordController;
use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\BlogsController;
use App\Http\Controllers\Backend\CmsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/admin', 'HomeController@redirectAdmin')->name('index');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/regent-hall', 'HomeController@regentHall')->name('regent-hall');
Route::get('/anantaa-hall', 'HomeController@anantaHall')->name('anantaa-hall');
Route::get('/banjara-hall', 'HomeController@banjaraHall')->name('banjara-hall');
Route::get('/thank-you', 'HomeController@thankYou')->name('thank-you');
/**
 * Admin routes
 */
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('banner', BannerController::class);
    Route::resource('cms', CmsController::class);
    Route::resource('blogs', BlogsController::class);
    Route::resource('leads', LeadsController::class);

    // Login Routes.
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login/submit', [LoginController::class, 'login'])->name('login.submit');

    // Logout Routes.
    Route::post('/logout/submit', [LoginController::class, 'logout'])->name('logout.submit');

    // Forget Password Routes.
    Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('/password/reset/submit', [ForgotPasswordController::class, 'reset'])->name('password.update');
})->middleware('auth:admin');
