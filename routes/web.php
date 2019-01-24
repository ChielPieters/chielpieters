<?php

use App\Post;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//<----HOME----->
Route::get('/home', 'HomeController@index')->name('home');

//<----MUZIEK----->
Route::get('/muziek', 'MusicController@index');
Route::post('/music', 'MusicController@create')->name('music');
Route::get('/muziek', 'PostController@create')->name('music');
Route::post('/muziek', 'PostController@store')->name('music');
Route::get('/muziek', function () {

    $post = DB::table('posts')->get();

    return view('music', ['post' => $post]);
});

//<----PHOTOSHOP----->
Route::get('/photoshop', 'PhotoshopController@index');
Route::post('/photoshop', 'PhotoshopController@upload')->name('photoshop');
Route::get('/photoshop', function () {

    $image = DB::table('psimage')->get();

    return view('photoshop', ['image' => $image]);
});

//<----UNREAL ENGINE----->
Route::get('/unrealengine', 'UnrealEngineController@index');
