<?php

namespace App\Http\Controllers\Bus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function index()
    {
        return view('pages.bus.bus');
    }
    public function show()
    {
        return view('pages.bus.detail');
    }
    public function price_bus()
    {
        return view('pages.bus.price-bus');
    }
}
