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

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/create', function () {
    return view('pages.create');
});

//Route::get('/posts','App\Http\Controllers\PostsController@index');

Route::resource('posts','App\Http\Controllers\PostsController');
Route::post('posts/{id}', 'App\Http\Controllers\PostsController@update');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
