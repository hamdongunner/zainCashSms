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


Route::get('/','UserController@getUsers');

Route::get('/sms', function () {
    Nexmo::message()->send([
        'to' => '9647819898919',
        'from' => '9647819898919',
        'text' => 'Using the facade to send a message.'
    ]);
});
