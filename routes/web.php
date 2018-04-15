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
Route::get('/', function () {
    $word = DB::table('Words')->pluck('name','id')->toArray();
    return view('layouts.mainlayout', ['words' => $word]);
});

Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('auth/{provider}', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');
Route::get('word/{id}', 'wordController@show', function ($id){
})->where('id', '[0-9]+');
Route::get('add/', 'wordController@create');
Route::post('words/', 'wordController@store');
Route::get('drow/', 'wordController@index');
Route::get('member/{id}', 'UserController@index', function ($id){})->where('id', '[0-9]+');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('tag/{id}', 'tagController@show', function ($id){})->where('id', '[0-9]+');

