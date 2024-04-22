<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CenterController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuizzController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
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




Route::resource('categories', CategorieController::class);
Route::resource('centers', CenterController::class);

Route::get('/Center', [CategorieController::class, 'indexCenter'])->name('center.index');

Route::get('/Center', [CenterController::class, 'paginateCenters'])->name('centers.paginate');



// Route::get('/AffCenter', function () {
//     return view('Admin.AffCenter');
// });


// Route::get('/test', function () {
//     return view('Test');
// });


Route::get('CenterShow/{id}', [CenterController::class,'show'])->name('center.show');

Route::get('/Profile', function () {
    return view('Admin.Profile');
});


    Route::get('/quiz', [QuizzController::class, 'showQuizView'])->name('quiz')->middleware('checkPass');
    Route::post('/quiz/submit', [QuizzController::class, 'submitQuiz'])->name('quiz.submit'); // Route pour soumettre le quiz
    Route::get('/quiz/result', [QuizzController::class, 'showQuizResult'])->name('quiz.result');

Route::get('Admin/quiz/result', [QuizzController::class, 'indexResult'])->name('Admin.result');

Route::get('Admin/reservation', [ReservationController::class, 'showReservations'])->name('reservation.index');

Route::post('/reservation/make', [ReservationController::class, 'makeReservation'])->name('reservation.make');



Route::get('/register', [AuthController::class ,'index'])->name('register');
Route::post('/register',[AuthController::class,'StoreRegister'])->name('register.store');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/DashboardAdmin', function () {
    return view('Admin.DashboardAdmin');
});

Route::get('/page4', function () {
    return view('error.Page403');
});

Route::get('/Static', [UserController::class, 'index']);



