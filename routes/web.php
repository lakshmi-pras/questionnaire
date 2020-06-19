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

/*
Route::get('/hello', function () {
    $variable='Hello got back Routes Again.';

    return view('hello',['data'=>$variable]);
});

Route::get('/hello', function () {
    $coolstring='Hello got back Routes Again.';

    return view('hello')->with('coolstring',$coolstring);
}); 

Route::get('/hello','HelloController@index');*/

//Route::get('/about','HelloController@about');
//Route::get('/services','HelloController@Services');
Route::view('/about','about');
Route::view('/services','Services');
