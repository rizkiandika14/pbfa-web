<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

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
Route::post('/postregister', [LoginController::class, 'postregister'])->name('postregister');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/postLogin', [LoginController::class, 'postLogin'])->name('postLogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::group(['middleware' => ['auth', 'cekLevel:admin,anggota,bendahara']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
Route::group(['middleware' => ['auth', 'cekLevel:admin']], function () {
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::delete('users/{id}', [UserController::class, 'delete'])->name('users.delete');
});
