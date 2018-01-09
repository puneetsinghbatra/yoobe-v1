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

// Ai Results - Activate Store Route 
Route::get('influencer/result', 'InfluencerController@result')->name('influencer.result');
// Launch Store Route
Route::get('influencer/launch', 'InfluencerController@launch')->name('influencer.launch');


//Google Api Login
Route::get('glogin',array('as'=>'glogin','uses'=>'UserController@googleLogin')) ;
Route::get('google-user',array('as'=>'user.glist','uses'=>'UserController@listGoogleUser')) ;
