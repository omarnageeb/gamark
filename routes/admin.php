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





Route::group(['namespace'=> 'gamarkAdminController', 'middleware' => 'auth:admin'], function() {

    Route::get('/' ,'DashboardController@indexAdmin') -> name('admin.dashboard');

    Route::get('createOffers' ,'offersController@offersForm') -> name('createOffers');

    Route::post('store' ,'offersController@store') -> name('post.createOffers');

});



/** L namespace => admin 3lshn tshawer 3la l folder aly feh l controller bdal ma aktb l pass bta3 l folder kol shwaya fe l method **/

/*
Route::group(['namespace'=> 'admin', 'middleware' => 'guest:admin'], function() {

    Route::get('login' ,'LoginController@getLogin') -> name('get.admin.login');
    Route::post('login' ,'LoginController@Login') -> name('admin.login');

});

*/

Route::group(['namespace'=> 'gamarkAdminController', 'middleware' => 'guest:admin'], function() {

    Route::get('login' ,'LoginGamarkController@getLogin') -> name('get.loginGamark');
    Route::post('login' ,'LoginGamarkController@Login') -> name('admin.login');

});


/*

Route::group(['namespace'=> 'gamarkAdminController'], function() {

    Route::get('login' ,'LoginGamarkController@getLogin') -> name('get.loginGamark');

    Route::get('/' ,'DashboardController@indexAdmin') -> name('dashboard.home');

});

*/
