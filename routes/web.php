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
Route::get('word/{name}', 'wordController@showName', function ($name){
})->where('name', '[^0-9]+');
Route::get('definition/{id}', 'wordController@showdef', function ($id){
})->where('id', '[0-9]+');
Route::get('add/', 'wordController@create');
Route::post('words/', 'wordController@store');

Route::get('letter/{id}', 'wordController@lettersearch', function ($id){
})->where('id', '[^0-9]+');

Route::get('word', 'wordController@index');

Route::get('member/{id}', 'UserController@index', function ($id){})->where('id', '[0-9]+');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('tag/{id}', 'tagController@show', function ($id){})->where('id', '[0-9]+');
Route::post('/like', [
    'uses' => 'wordController@likeDef',
    'as' => 'like'
]);
Route::post('/likePressed', [
    'uses' => 'wordController@likePressedDef',
    'as' => 'likePressed'
]);
Route::post('/dislike', [
    'uses' => 'wordController@dislikeDef',
    'as' => 'dislike'
]);
Route::post('/dislikePressed', [
    'uses' => 'wordController@dislikePressedDef',
    'as' => 'dislikePressed'
]);
Route::get('laravel-ajax-pagination',array('as'=>'ajax-pagination','uses'=>'wordController@index'));
