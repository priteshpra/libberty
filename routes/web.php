<?php

use App\Http\Controllers\Backend\LeadsController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\AdminsController;
use App\Http\Controllers\Backend\Auth\ForgotPasswordController;
use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\BlogsController;
use App\Http\Controllers\Backend\CmsController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\BlogController;

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
Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.details');

Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
Route::get('/comments/{blogId}', [CommentController::class, 'fetchComments'])->name('comments.fetch');
// Route::post('/comments/{id}/approve', [CommentController::class, 'updateApproval'])->name('admin.comment.approve');
Route::post('/admin/comments/{id}/approve', [CommentController::class, 'updateApproval'])->name('admin.comment.approve');
Route::post('/comment/{id}/like', [CommentController::class, 'like'])->name('comment.like');


/**
 * Admin routes
 */
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('banner', BannerController::class);
    Route::resource('gallery', GalleryController::class);
    Route::resource('cms', CmsController::class);
    Route::resource('blogs', BlogsController::class);
    Route::resource('leads', LeadsController::class);
    Route::resource('comment', CommentController::class);
    Route::resource('testimonial', TestimonialController::class);

    // Login Routes.
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login/submit', [LoginController::class, 'login'])->name('login.submit');

    // Logout Routes.
    Route::post('/logout/submit', [LoginController::class, 'logout'])->name('logout.submit');

    // Forget Password Routes.
    Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('/password/reset/submit', [ForgotPasswordController::class, 'reset'])->name('password.update');
})->middleware('auth:admin');
