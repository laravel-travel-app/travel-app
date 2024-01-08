<?php

namespace App\Http\Controllers\Tour;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        return view("pages.tour.list-package-tour");
    }
    public function list()
    {
    }
    public function detail()
    {
        return view("pages.tour.detail-tour");
    }
}
