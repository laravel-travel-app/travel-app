<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;

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

Route::get('admin/dashboard', [DashboardController::class, 'index']);

Route::get('login', [AuthController::class, 'login']);
Route::post('masuk', [AuthController::class, 'post_login']);

Route::get('admin/data-mobil', [CarController::class, 'index']);
Route::get('admin/tambah-mobil', [CarController::class, 'create']);
Route::post('admin/post', [CarController::class, 'store']);
Route::get('admin/edit-mobil/{id}', [CarController::class, 'edit']);
Route::put('admin/update/{id}', [CarController::class, 'update']);
