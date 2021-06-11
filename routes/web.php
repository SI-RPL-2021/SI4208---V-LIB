<?php

use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\DeleteController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use Illuminate\Console\Scheduling\Event;
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

// route biasa
Route::get('/', function () { return view('welcome'); });
Route::get('/about', function () { return view('about'); });
Route::get('/catalog', function () { return view('catalog'); });
Route::get('/books/addBooks', function () { return view('addBooks'); });

// route auth
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/restricted', [App\Http\Controllers\HomeController::class, 'restricted'])->middleware(['role']);
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

//route book
Route::get('/catalog', 'App\Http\Controllers\BooksController@catalog');
Route::get('/listBooks', 'App\Http\Controllers\BooksController@listBooks');
Route::get('/books/addBooks', 'App\Http\Controllers\BooksController@create');
Route::post('/books/addBooks', 'App\Http\Controllers\BooksController@store')->name('/books/addBooks');
Route::get('/book/{book}', 'App\Http\Controllers\BooksController@show');
Route::get('/book/{book}/editBooks', 'App\Http\Controllers\BooksController@edit');
Route::post('/book/{book}', 'App\Http\Controllers\BooksController@update');
Route::patch('/book/{book}', 'App\Http\Controllers\BooksController@verified');
Route::delete('/book/{book}', 'App\Http\Controllers\BooksController@destroy');