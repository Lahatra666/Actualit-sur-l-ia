<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//login
Route::get('/',[LoginController::class, 'index'])->name('index');
Route::post('/ia-information/authenticate',[LoginController::class, 'authenticate'])->name('authenticate');
Route::get('logout',[LoginController::class, 'logout'])->name('logout');
Route::get('/ia-information/ajouterarticle.html',[ArticleController::class, 'formajoutarticle'])->name('formajoutarticle');
Route::get('/ia-information/login.html',[LoginController::class, 'login'])->name('login');
Route::get('/ia-information/detail-{idarticle}.html',[ArticleController::class, 'detail'])->name('detail');

Route::get('/nouveaucompte.html',[LoginController::class, 'registeruser'])->name('registeruser');
Route::get('/search',[ArticleController::class, 'search'])->name('search');

Route::post('/storeinfo',[LoginController::class, 'storeinfo'])->name('storeinfo');

// article
Route::post('/storearticle',[ArticleController::class, 'storearticle'])->name('storearticle');

Route::get('sitemap.xml','SitemapController@index')->name('sitemap');




