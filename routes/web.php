<?php

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

Route::resource('/',  SiteController::class);

Route::get('categories/index', [CategoriesController::class,'index'])->name('categories.index');
Route::get('categories/show/{id}', [CategoriesController::class,'show'])->name('categories.show');
Route::resource('feedbacks', FeedbacksController::class);


Route::get('site/about', [SiteController::class, 'about'])->name('site.about');
Route::get('news/show/{id}', [NewsController::class, 'show'])->name('news.show');
Route::resource('site', SiteController::class);
