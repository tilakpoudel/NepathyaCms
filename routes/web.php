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


Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

    Route::get('/home', [
        'uses'=>'HomeController@index',
        'as'=>'home'
    ]);


    Route::get('/submenus/create',[
        'uses'=>'SubMenuController@create',
        'as'=>'submenus.create'
    ]);
    Route::get('/mainmenus/create',[
        'uses'=>'MainMenuController@create',
        'as'=>'mainmenu.create'
    ]);
    Route::post('/mainmenu/store',[
        'uses'=>'MainMenuController@store',
        'as'=>'mainmenu.store'
    ]);
    Route::get('/mainmenus/view',[
        'uses'=>'MainMenuController@index',
        'as'=>'mainmenu.view'
    ]);
    Route::get('/mainmenus/edit/{id}',[
        'uses'=>'MainMenuController@edit',
        'as'=>'mainmenu.edit'
    ]);
    Route::post('/mainmenu/upadate/{id}',[
        'uses'=>'MainMenuController@update',
        'as'=>'mainmenu.update'
    ]);
});

