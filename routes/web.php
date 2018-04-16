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

/**
 * Our form for submitting
 */
Route::view('/form', 'form')->name('form');

/**
 * Our form submission end point that throws an exception
 */
Route::post('/form', function () {
    throw new \Exception('Something went wrong');
});
