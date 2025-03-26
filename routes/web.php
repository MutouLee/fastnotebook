<?php

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

Route::get('/', [\App\Http\Controllers\ArticleController::class, 'index'])->name('list.index');
Route::get('/c/{category}', [\App\Http\Controllers\ArticleController::class, 'listByCategory'])->name('list.category');
Route::get('/{article}', [\App\Http\Controllers\ArticleController::class, 'show'])->where('article', '[0-9]+')->name('article.show');
Route::get('/getarticles', [\App\Http\Controllers\ArticleController::class, 'getArticlesForList'])->name('list.page');
Route::get('/s', [\App\Http\Controllers\ArticleController::class, 'search'])->name('article.search');
