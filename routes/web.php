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

// Route::get('/', function () {
//     return view('inc.home');
// });
//Route::get('/','CreatesController@home');
Route::post('/insert','CreatesController@add');
Route::get('/create',function(){
    return view('inc.create');
});
Route::get('/update/{id}','CreatesController@update');
Route::post('/edit/{id}','CreatesController@edit');
Route::get('/read/{id}','CreatesController@read');
Route::get('/delete/{id}', 'CreatesController@delete');
Route::get('/file','FilesController@insertFile');
Route::post('/store','FilesController@store');
Route::any('/','AppController@index')