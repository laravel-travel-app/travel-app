<?php

use App\Http\Controllers\Bus\BusController;
use App\Http\Controllers\Car\CarController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//Route Home
Route::get("/", [HomeController::class, 'index'])->name("home.index");

//Route Bus
Route::get("/sewa-bus-pariwisata", [BusController::class, 'index'])->name("bus.index");
Route::get("/sewa-bus-pariwisata/harga-sewa-bus", [BusController::class, 'price_bus'])->name("bus.price");
Route::get("/sewa-bus-pariwisata/detail-bus", [BusController::class, 'show'])->name("bus.detail");

//Route Car
Route::get("/sewa-mobil", [CarController::class, 'index'])->name("car.index");

//Route Kontak
Route::get("/kontak", [ContactController::class, 'index'])->name("contact.index");
