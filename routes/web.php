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

Route::get('/about', function () {
    return view('about');
});

Route::get('/catalog', function () {
    return view('catalog');
});

//books
Route::get('/catalog', 'App\Http\Controllers\BooksController@index');
// Route::get('/product/create', 'App\Http\Controllers\ProductController@create');
// Route::post('/product/create', 'App\Http\Controllers\ProductController@store');
// Route::delete('/product/{product}', 'App\Http\Controllers\ProductController@destroy');
// Route::get('/product/{product}/edit', 'App\Http\Controllers\ProductController@edit');
// Route::patch('/product/{product}', 'App\Http\Controllers\ProductController@update');

Auth::routes();
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
// Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/restricted', [App\Http\Controllers\HomeController::class, 'restricted'])->middleware(['role:0']);