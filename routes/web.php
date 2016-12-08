<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    //$people = array('Kyle', 'Decker', 'Emily');
    $people = array();

    return view('welcome', [
        'data'=>[
            'people'=>$people
        ]
    ]);
});
*/

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
