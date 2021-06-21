<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/control','MyController@Control');

Route::get('/home','student@index'); 

Route::get('/hello','hello@hi');

Route::get('/name/{name}','ControllerName@control');

Route::get('/hi','ControllerName@MyController');

Route::get('/url','ControllerName@getURL');

Route::get('/sesion', function () {
    $name = 'Hoàng Bách';
    $class = '11B64';
    return view('sesion', compact( 'name', 'class' ));
});

Route::get('/Miclien' , function(){
    return view('web_shop');
})

