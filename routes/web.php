<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return 'Hello';
// });

Route::get('/', [UserController::class, 'index'] );
Route::get('/index', [UserController::class, 'index'] );
Route::get('/about_us', [UserController::class, 'about_us'] );
Route::get('/blog', [UserController::class, 'blog'] );
Route::match(['get', 'post'],'/quote', [UserController::class, 'quote'] );
Route::match(['get', 'post'], '/contact_us', [UserController::class, 'contact_us'] );
Route::get('/about', [UserController::class, 'about'] );
Route::match(['get', 'post'],'/track_parcel', [UserController::class, 'track_parcel'] );
Route::match(['post'], '/show_quote', [UserController::class, 'show_quote'] )->name('show_quote');
Route::match(['get'], '/show_quote', [UserController::class, 'show_quote'] );
Route::match(['get'],'/post/{id}', [userController::class, 'post'] );
///{$quote_data}


Route::get('/dashboard', [AdminController::class, 'dashboard'] );
Route::match(['get', 'post'],'/edit_calculator', [AdminController::class, 'edit_calculator'] );
Route::match(['get', 'post'],'/dash_contact_us', [AdminController::class, 'dash_contact_us'] );
Route::match(['get', 'post'],'/orders', [AdminController::class, 'orders'] );
Route::match(['get', 'post'],'/about_us', [AdminController::class, 'about_us'] );
Route::match(['get', 'post'],'/blogs', [AdminController::class, 'blogs'] );
Route::match(['get', 'post'],'/login', [AdminController::class, 'login'] )->name('login');
Route::match(['get'],'/logout', [AdminController::class, 'logout'] )->name('logout');

