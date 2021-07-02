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
    return view('home');
});

//Bagian table alat
use App\Http\Controllers\AlatController;

route::group(['middleware' => 'auth'], function () {

    Route::get('/alat', [AlatController::class, 'index']);
    Route::post('/alat/create', [AlatController::class, 'create']);
    Route::get('/alat/{id}/edit', [AlatController::class, 'edit']);
    Route::post('/alat/{id}/update', [AlatController::class, 'update']);
    Route::get('/alat/{id}/delete', [AlatController::class, 'delete']);
});

//Bagian Table user
use App\Http\Controllers\userController;

Route::get('/login', [userController::class, 'login'])->name('login');
Route::post('/postlogin', [userController::class, 'postlogin']);
Route::get('/logout', [userController::class, 'logout']);

Route::get('/user', [userController::class, 'index']);
Route::post('/user/create', [userController::class, 'create']);
Route::get('/user/{id}/edit', [userController::class, 'edit']);
Route::post('/user/{id}/update', [userController::class, 'update']);
Route::get('/user/{id}/delete', [userController::class, 'delete']);

//Bagian Dashboard
use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

//Bagian Login
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'login']);
Route::post('/postlogin', [AuthController::class, 'postlogin']);
Route::get('/logout', [AuthController::class, 'logout']);

//jadwal
use App\Http\Controllers\JadwalController;

// Route::get('/jadwal', function () {
//     redirect('/jadwal/index');
// });
Route::get('/jadwal', [JadwalController::class, 'index']);

//proses
use App\Http\Controllers\ProsesController;

Route::get('/proses', [ProsesController::class, 'index']);
