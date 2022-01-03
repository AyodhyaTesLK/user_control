<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

// Route::get('/', function () {
//     return view('welcome');
// });







//user routes--------------------------------------------------------------

// Route::get('/users', [UsersController::class, 'index'])->name('users');

// Route::get('/create', [UsersController::class, 'create'])->name('create');
// // Route::get('/adduser', function () {
// //     return view('users.create');
// // })->name('adduser');

// Route::post('/adduser', [UsersController::class, 'store']);


Route::resource('/users', UsersController::class);




//page routes
Route::get('/about', [PagesController::class, 'index']);
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

