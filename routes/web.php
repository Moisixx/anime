<?php

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



Route::resource('admin-list-anime', 'App\Http\Controllers\AnimeController');
Route::resource('admin-list-peliculas', 'App\Http\Controllers\PeliculasController');
Route::resource('/', 'App\Http\Controllers\IndexController');
Route::resource('admin-capitulos-anime', 'App\Http\Controllers\CapitulosAnimeController');