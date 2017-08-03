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

// Homepage Route
Route::get('/', function () {
    return view('welcome');
});

// Login Routes
Auth::routes();

// Dashboard
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

// Social 
Route::get('/social', function() {
    return view('social');
})->middleware('auth');

// Resource Controllers
Route::resource('clientes','ClientController');
Route::resource('ordenes','OrderController');
Route::resource('comandas','ComandaController');
Route::resource('configurador','ConfiguradorController');
