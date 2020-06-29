<?php

use Illuminate\Support\Facades\Route;
use App\Libro;

Route::get('/',  'PagesController@libros');

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
