<?php

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

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>['auth']], function(){
    Route::get('/nopermission', 'HomeController@permissionDenied')->name('nopermission');

    Route::group(['middleware'=>['client'], 'prefix'=>'client'],function(){
        Route::get('/','ClientController@index')->name('client');
        Route::get('/myresponses','Clientcontroller@myresponses')->name('myresponses');
        Route::resource('contact', 'ContactController');
    });
    Route::group(['middleware'=>['manager'], 'prefix'=>'manager'],function(){
        Route::get('/','ManagerController@index')->name('manager');
        Route::get('respond/create/{id}','ManagerController@create')->name('respond.create');
        Route::resource('response', 'ResponseController');
    });

});
