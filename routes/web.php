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

Route::post('/login/custom',[
    'uses' => 'LoginController@login',
    'as' => 'login.custom'
]);

Auth::routes();
Route::group(['middleware' => ['web','auth']], function(){
    
    Route::get('/dashboard', 'BukuController@indexAdmin') -> name('dashboard');      
    Route::get('/buku', 'BukuController@index') -> name('buku');      

    Route::get('/buku/create', 'BukuController@create');
    Route::post('/buku', 'BukuController@store');

    Route::get('/buku/restore', 'BukuController@restore');

    Route::get('/buku/{id}', 'BukuController@show');

    Route::get('/buku/{id}/edit', 'BukuController@edit');
    Route::put('/buku/{id}', 'BukuController@update');

    Route::delete('/buku/{id}', 'BukuController@destroy');
});

Route::get('/home', 'HomeController@index')->name('home');
