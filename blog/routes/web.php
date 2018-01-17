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


Route::get('/getUserJSON','CreatesController@getUserJSON');

Route::get('/probando',function () {
    return view('probando');
});


Route::post('ruta1','CreatesController@addPost');


Route::put('/users/edit', [
    'uses' => 'CreatesController@edit',
    'as' => 'user.edit'
]);


Route::get('/', 'CreatesController@home');


Route::get('/create', function () {
    return view('muestra');
});


Route::get('/users', 'CreatesController@home2');


Route::post('/insert', 'CreatesController@add');

Route::post('/edit/{id}', 'CreatesController@edit');


Route::get('/update/{id}', 'CreatesController@update');

Route::get('/delete/{id}', 'CreatesController@delete');


//Route::get('/create', 'CreatesController@home');
