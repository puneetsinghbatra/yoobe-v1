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

// Home Page
Route::get('/', function () {
    return view('index');
});

//Influencer Routes
Route::get('influencer/activate', 'InfluencerController@activateView')->name('influencer.activate');
Route::get('influencer/activate/result', 'InfluencerController@result')->name('influencer.result');

//Google Api Login
Route::get('glogin',array('as'=>'glogin','uses'=>'UserController@googleLogin')) ;
Route::get('google-user',array('as'=>'user.glist','uses'=>'UserController@listGoogleUser')) ;
