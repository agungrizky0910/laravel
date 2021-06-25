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

use App\Http\Controllers\AlatController;

Route::get('/alat', [AlatController::class, 'index']);
Route::post('/alat/create', [AlatController::class, 'create']);
Route::get('/alat/{id}/edit', [AlatController::class, 'edit']);
Route::post('/alat/{id}/update', [AlatController::class, 'update']);
Route::get('/alat/{id}/delete', [AlatController::class, 'delete']);
