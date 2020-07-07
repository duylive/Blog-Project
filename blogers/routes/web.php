<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::prefix('posts')->group(function () {
        Route::get('/', 'PostController@index')->name('posts.index');
        Route::get('{id}/detail', 'PostController@detail')->name('posts.detail');
        Route::get('/create', 'PostController@create')->name('posts.create');
        Route::post('/create', 'PostController@store')->name('posts.store');
        Route::get('{id}/edit', 'PostController@edit')->name('posts.edit');
        Route::post('{id}/edit', 'PostController@update')->name('posts.update');
        Route::get('{id}/destroy', 'PostController@destroy')->name('posts.destroy');
        Route::get('/search', 'PostController@search')->name('posts.search');
    });
});

Route::prefix('users')->group(function () {
    Route::get('/', 'UserController@index')->name('users.index');
    Route::get('{id}/detail', 'UserController@detail')->name('users.detail');
    Route::get('/create', 'UserController@create')->name('users.create');
    Route::post('/create', 'UserController@store')->name('users.store');
    Route::get('{id}/edit', 'UserController@edit')->name('users.edit');
    Route::post('{id}/edit', 'UserController@update')->name('users.update');
    Route::get('{id}/destroy', 'UserController@destroy')->name('users.destroy');
    Route::get('/search', 'UserController@search')->name('users.search');
});

