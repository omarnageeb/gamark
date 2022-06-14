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


Route::get('landing', function () {
    return view('landing');
});


Route::get('aboutUs', function () {
    return view('aboutUs');
});



Route::get('contactUs', function () {
    return view('contactUs');
});

Route::get('index', function () {
    return view('welcome');
});


Route::get('front', function () {
    return view('front/home');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*

Route::group(['namespace'=> 'gamarkAdminController'], function() {

    Route::get('offers' ,'offersController@offersForm') -> name('offers');

});
*/

Route::get('index2' ,'frontControl@frontIndex') ;



Route::group(['namespace'=> 'frontController'], function() {

    Route::get('index' ,'frontControl@index') -> name('gamarkFront.home');;

});



