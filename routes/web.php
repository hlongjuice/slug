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

Route::get('/', function () {
    return view('welcome');
});
//Route::resource('บทความ','PostController');
Route::prefix('บทความ')->group(function(){
    Route::get('/','PostController@index')
        ->name('posts.index');
    Route::get('/{slug}','PostController@show')
        ->name('posts.show');
    Route::get('/สร้างใหม่','PostController@show')
        ->name('posts.create');
});

Route::get('optional_param/{param?}',function($param = Null){
    return $param;
});