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
    return view('auth.login');
});


Route::prefix('categories')->group(function () {
    Route::get('/', 'CategoryController@index')->name('categories.index');
    Route::get('{id}/detail', 'CategoryController@detail')->name('categories.detail');
    Route::get('/create', 'CategoryController@create')->name('categories.create');
    Route::post('/create', 'CategoryController@store')->name('categories.store');
    Route::get('{id}/edit', 'CategoryController@edit')->name('categories.edit');
    Route::post('{id/edit', 'CategoryController@update')->name('categories.update');
    Route::get('{id}/destroy', 'CategoryController@destroy')->name('categories.destroy');
    Route::get('/search', 'CategoryController@search')->name('categories.search');
});

Auth::routes();

Route::group(['prefix' => 'posts'], function () {
    //  Route::get('/', 'HomeController@index')->name('home');
    Route::group(['middleware' => 'auth'], function () {
        // Route::get('/', 'PostController@index')->name('posts.index');
        // Route::get('{id}/detail', 'PostController@detail')->name('posts.detail');
        Route::get('/create', 'PostController@create')->name('posts.create');
        Route::post('/create', 'PostController@store')->name('posts.store');
        Route::get('{id}/edit', 'PostController@edit')->name('posts.edit');
        Route::post('{id}/edit', 'PostController@update')->name('posts.update');
        Route::get('{id}/destroy', 'PostController@destroy')->name('posts.destroy');
        // Route::get('/search', 'PostController@search')->name('posts.search');
        Route::resource('comments', 'CommentsController');
    });
    Route::get('/', 'PostController@index')->name('posts.index');
    Route::get('{id}/detail', 'PostController@detail')->name('posts.detail');
    Route::get('/search', 'PostController@search')->name('posts.search');
});

Route::post('{id}/comment', 'CommentController@postComment');
Route::get('{id}/comment', 'CommentController@destroyComment')->name('comments.destroy');

Route::group(['prefix' => 'users'], function () {
    //  Route::get('/', 'HomeController@index')->name('home');
    Route::group(['middleware' => 'auth'], function () {
      //  Route::get('/', 'UserController@index')->name('users.index');
      //  Route::get('{id}/detail', 'UserController@detail')->name('users.detail');
        Route::get('/create', 'UserController@create')->name('users.create');
        Route::post('/create', 'UserController@store')->name('users.store');
        Route::get('{id}/edit', 'UserController@edit')->name('users.edit');
        Route::post('{id}/edit', 'UserController@update')->name('users.update');
        Route::get('{id}/destroy', 'UserController@destroy')->name('users.destroy');
      //  Route::get('/search', 'UserController@search')->name('users.search');
    });
    Route::get('/', 'UserController@index')->name('users.index');
    Route::get('{id}/detail', 'UserController@detail')->name('users.detail');
    Route::get('/search', 'UserController@search')->name('users.search');
});

