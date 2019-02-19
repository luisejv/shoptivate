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

Route::get('/header', function () {
    return view('header');
});

Route::get('/content', function () {
    return view('content');
});

Route::get('/main-content', function () {
    return view('mainContent');
});

Route::get('/product', function () {
    return view('productView');
});

Route::get('/product1', function () {
    return view('productWOSize');
});

Route::get('/product2', function () {
    return view('productWSize');
});

Route::get('/videogame', function () {
    return view('productVideoGame');
});

Route::get('/footer', function () {
    return view('footer');
});