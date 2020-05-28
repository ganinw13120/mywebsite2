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

Route::get('/works/patsunee',function(){
    return view('works.patsunee');
});

Route::get('/works/election',function(){
    return view('works.election');
});

Route::get('/works/eesh',function(){
    return view('works.eesh');
});

Route::get('/works/matching',function(){
    return view('works.matching');
});
