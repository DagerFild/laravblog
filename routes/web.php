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

Route::get('/', '\App\Http\Controllers\PostController@index')->name('index');
Route::get('post/', '\App\Http\Controllers\PostController@index')->name('post.index');
Route::get('post/create', '\App\Http\Controllers\PostController@create')->name('post.create');
Route::get('post/{id}', '\App\Http\Controllers\PostController@show')->name('post.show');
Route::get('post/{id}/edit', '\App\Http\Controllers\PostController@edit')->name('post.edit');
Route::post('post/', '\App\Http\Controllers\PostController@store')->name('post.store');
Route::patch('post/{id}', '\App\Http\Controllers\PostController@update')->name('post.update');
Route::delete('post/{id}', '\App\Http\Controllers\PostController@destroy')->name('post.destroy');

Route::fallback(static function(){
        return view('errors.404');
    });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
