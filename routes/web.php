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

//Web
Route::get('/', 'Web\HomeController@index');

//Admin Panel
Route::group(['prefix' => 'panel', 'middleware'=>'auth'], function () {

    //Dashboard
    Route::get('/', ['as' => 'panel.dashboard', 'uses' => 'Panel\DashboardController@index']);

    //Categories
    Route::group(['prefix'=>'categories', 'namespace'=>'Panel'], function (){
        Route::get('/', ['as' => 'panel.categories.index', 'uses' => 'CategoryController@index']);
        Route::get('/create', ['as' => 'panel.categories.create', 'uses' => 'CategoryController@create']);
        Route::post('/store', ['as' => 'panel.categories.store', 'uses' => 'CategoryController@store']);

    });

    //Posts
    Route::group(['prefix'=>'posts', 'namespace'=>'Panel'], function (){
        Route::get('/', ['as' => 'panel.posts.index', 'uses' => 'PostController@index']);
        Route::get('/create', ['as' => 'panel.posts.create', 'uses' => 'PostController@create']);
        Route::post('/store', ['as' => 'panel.posts.store', 'uses' => 'PostController@store']);
        Route::get('/edit/{id}', ['as' => 'panel.posts.edit', 'uses' => 'PostController@edit']);

    });


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
