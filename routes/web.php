<?php

use App\Http\Controllers\Bus\BusController;
// use App\Http\Controllers\Car\CarController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Order\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\Tour\DetailController;
use App\Http\Controllers\Tour\TourController;

//Route Home
Route::get("/", [HomeController::class, 'index'])->name("home.index");
Route::get("/cara-pesan", [OrderController::class, 'index'])->name("order.index");
//Route car
Route::get("/sewa-mobil", [CarController::class, 'forUser'])->name("car.index");
//Route contact
Route::get("/kontak", [ContactController::class, 'index'])->name("contact.index");
//Route wisata
Route::get("/list/{slug}/", [TourController::class, 'list'])->name("tour.bandung");
Route::get("/paket-wisata-pangandaran/1-hari", [TourController::class, 'detail'])->name("tour.pangandaran.detail");
//Route Bus
Route::get("/sewa-bus-pariwisata", [BusController::class, 'index'])->name("bus.index");
Route::get("/sewa-bus-pariwisata/harga-sewa-bus", [BusController::class, 'price_bus'])->name("bus.price");
Route::get("/sewa-bus-pariwisata/detail-bus", [BusController::class, 'show'])->name("bus.detail");
/* Admin */
Route::get('admin/dashboard', [DashboardController::class, 'index']);

Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login');
    Route::post('masuk', 'post_login');
});


/* Admin - Data mobil */
Route::get('admin/data-mobil', [CarController::class, 'index']);
Route::get('admin/tambah-mobil', [CarController::class, 'create']);
Route::post('admin/post', [CarController::class, 'store']);
Route::get('admin/edit-mobil/{id}', [CarController::class, 'edit']);
Route::put('admin/update/{id}', [CarController::class, 'update']);
Route::delete('/admin/hapus-mobil/{id}', [CarController::class, 'delete'])->name('car.delete');
/* Admin - Data destinasi */
Route::get('admin/data-destinasi', [DestinationController::class, 'index']);
Route::get('admin/tambah-destinasi', [DestinationController::class, 'create']);
Route::post('admin/post-destinasi', [DestinationController::class, 'store']);

Route::get('admin/data-paket', [PaketController::class, 'index']);
Route::get('admin/create-paket', [PaketController::class, 'create']);
Route::post('admin/store-paket', [PaketController::class, 'store']);
Route::get('admin/hapus/{id}', [PaketController::class, 'destroy']);
