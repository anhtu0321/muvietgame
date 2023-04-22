<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('fontend/home');
});

// Trang quan tri
Route::group(['prefix'=>'admin'],function(){
    route::get('/','AdminController@getLogin')->name('admin.login');
    route::post('/','AdminController@postLogin');
    route::get('/logout','AdminController@getLogout');
    route::get('/home','HomeController::class@getHome')->name('home');
    //Quan tri tin tuc
    route::get('/tintuc','TintucController@index');
});
