<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FeedbacksController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SiteController;
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

Route::get('/',  [SiteController::class,'index'])->name('home');

Route::get('categories/index', [CategoriesController::class,'index'])->name('categories.index');
Route::get('categories/show/{id}', [CategoriesController::class,'show'])->name('categories.show');
Route::resource('feedbacks', FeedbacksController::class);
Route::get('login',[AuthController::class,'login'])->name('login');
Route::get('logout',[AuthController::class,'logout'])->name('logout');
Route::get('register',[AuthController::class,'register'])->name('register');
Route::post('authenticate',[AuthController::class,'authenticate'])->name('authenticate');
Route::get('register',[AuthController::class,'register'])->name('register');
Route::post('register',[AuthController::class,'register_store'])->name('register.store');


Route::get('site/about', [SiteController::class, 'about'])->name('site.about');
Route::get('news/show/{id}', [NewsController::class, 'show'])->name('news.show');
Route::resource('site', SiteController::class);
