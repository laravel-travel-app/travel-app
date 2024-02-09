<?php

namespace App\Http\Controllers\Tour;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class TourController extends Controller
{

    public function list($slug)
    {

        $packages = Package::all();

        return view("pages.tour.list-package-tour", ['packages' => $packages]);
    }
    public function detail()
    {
        return view("pages.tour.detail-tour");
    }
}
