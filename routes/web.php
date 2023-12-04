<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FeedbacksController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
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

// set locale for '/admin/anything/[en|fr|ru|jp]/anything' only
if (in_array(Request::segment(1),['uz', 'ru'])) {
    App::setLocale(Request::segment(1));
} else {
    App::setLocale('uz');
}



Route::get('/change-language/{locale}', function ($locale) {
    if (!in_array($locale, ['uz', 'ru'])) {
        abort(404);
    }
    App::setLocale($locale);

    return redirect()->back();
});



    Route::get('/', [SiteController::class,'index'])->name('home');
    Route::get('categories/index', [CategoriesController::class,'index'])->name('categories.index');
    Route::get('categories/show/{id}', [CategoriesController::class,'show'])->name('categories.show');
Route::resource('feedbacks', FeedbacksController::class);
Route::get('login',[AuthController::class,'login'])->name('login');
Route::get('logout',[AuthController::class,'logout'])->name('logout');
Route::get('register',[AuthController::class,'register'])->name('register');
Route::post('authenticate',[AuthController::class,'authenticate'])->name('authenticate');
Route::get('register',[AuthController::class,'register'])->name('register');
Route::post('register',[AuthController::class,'register_store'])->name('register.store');
Route::get('forgot-password',[AuthController::class,'forgot_password'])->name('forgot.password');
Route::post('password-send',[AuthController::class,'password_send'])->name('password.send');


Route::get('site/about', [SiteController::class, 'about'])->name('site.about');
Route::get('news/show/{id}', [NewsController::class, 'show'])->name('news.show');
Route::resource('site', SiteController::class);



