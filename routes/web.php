<?php

use App\Http\Controllers\Bus\BusController;
use App\Http\Controllers\Car\CarController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Order\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\PaketController;

//Route Home
Route::get("/", [HomeController::class, 'index'])->name("home.index");
Route::get("/cara-pesan", [OrderController::class, 'index'])->name("order.index");
//Route Bus
Route::get("/sewa-bus-pariwisata", [BusController::class, 'index'])->name("bus.index");
Route::get("/sewa-bus-pariwisata/harga-sewa-bus", [BusController::class, 'price_bus'])->name("bus.price");
Route::get("/sewa-bus-pariwisata/detail-bus", [BusController::class, 'show'])->name("bus.detail");

