<?php

use App\Http\Controllers\Bus\BusController;
// use App\Http\Controllers\Car\CarController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Order\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Car\CarController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\Tour\DetailController;

//Route Home
Route::get("/", [HomeController::class, 'index'])->name("home.index");
Route::get("/cara-pesan", [OrderController::class, 'index'])->name("order.index");

//Route car
Route::get("/sewa-mobil", [CarController::class, 'index'])->name("car.index");

//Route contact
Route::get("/kontak", [ContactController::class, 'index'])->name("contact.index");

//Route detail
Route::get("/paket-wisata-bandung", [DetailController::class, 'index'])->name("tour.bandung.detail");
//Route Bus
Route::get("/sewa-bus-pariwisata", [BusController::class, 'index'])->name("bus.index");
Route::get("/sewa-bus-pariwisata/harga-sewa-bus", [BusController::class, 'price_bus'])->name("bus.price");
Route::get("/sewa-bus-pariwisata/detail-bus", [BusController::class, 'show'])->name("bus.detail");
