<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/service', function () {
    return view('service');
});


Route::get('/Center', function () {
    return view('Center');
});


Route::resource('categories', CategorieController::class);

Route::get('/AffCenter', function () {
    return view('Admin.AffCenter');
});

Route::get('/AddCenter', function () {
    return view('Admin.AddCenter');
});


Route::get('/register', [AuthController::class ,'index'])->name('register');
Route::post('/register',[AuthController::class,'StoreRegister'])->name('register.store');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/DashboardAdmin', function () {
    return view('Admin.DashboardAdmin');
});

Route::get('/Static', function () {
    return view('Admin.Static');
});

