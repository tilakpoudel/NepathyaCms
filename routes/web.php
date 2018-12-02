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

Route::get('/', [
    'uses'=>'FrontendController@index',
    'as'=>'index'
]);

Auth::routes();


Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

    Route::get('/home', [
        'uses'=>'HomeController@index',
        'as'=>'home'
    ]);

    Route::get('/mainmenu/create',[
        'uses'=>'MainMenuController@create',
        'as'=>'mainmenu.create'
    ]);
    Route::post('/mainmenu/store',[
        'uses'=>'MainMenuController@store',
        'as'=>'mainmenu.store'
    ]);
    Route::get('/mainmenu/view',[
        'uses'=>'MainMenuController@index',
        'as'=>'mainmenu.view'
    ]);
    Route::get('/mainmenu/edit/{id}',[
        'uses'=>'MainMenuController@edit',
        'as'=>'mainmenu.edit'
    ]);
    Route::post('/mainmenu/upadate/{id}',[
        'uses'=>'MainMenuController@update',
        'as'=>'mainmenu.update'
    ]);
    Route::get('/submenu/create',[
        'uses'=>'SubMenuController@create',
        'as'=>'submenu.create'
    ]);
    Route::post('/submenu/store/',[
        'uses'=>'SubMenuController@store',
        'as'=>'submenu.store'
    ]);
    Route::get('/submenu/view',[
        'uses'=>'SubMenuController@index',
        'as'=>'submenu.view'
    ]);
    Route::get('/submenu/edit/{id}',[
        'uses'=>'SubMenuController@edit',
        'as'=>'submenu.edit'
    ]);
    Route::post('/submenu/upadate/{id}',[
        'uses'=>'SubMenuController@update',
        'as'=>'submenu.update'
    ]);
    // Route::get('/test/create',[
    //     'uses'=>'TestController@create',
    //     'as'=>'test.create'
    // ]);
});

