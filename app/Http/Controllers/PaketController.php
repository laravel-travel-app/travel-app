<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Destination;

class PaketController extends Controller
{
    public function index()
    {
        $package = Package::all();
        return view('admin.paketwisata.index', compact('package'));
    }

    public function create()
    {
        $destination = Destination::all();
        return view('admin.paketwisata.create', compact('destination'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'package_name' => 'required|string|max:100',
            'price' => 'required',
            'desc' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('img/', $name);
        }

        $package = new Package;
        $package->image = $name;
        $package->package_name = $request->package_name;
        $package->price = $request->price;
        $package->desc = $request->desc;
        $package->destination_id = $request->destination_id;

        $package->save();
        return redirect('admin/data-paket')->with('message', 'Data Berhasil Disimpan');
    }
}
