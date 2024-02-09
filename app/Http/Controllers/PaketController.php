<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Destination;
use Illuminate\Support\Facades\DB;

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
        $destination = Destination::get('slug')->first();
        $package = new Package;
        $package->image = $name;
        $package->package_name = $request->package_name;
        $package->price = $request->price;
        $package->desc = $request->desc;
        $package->slug = \Str::slug($destination->slug);
        $package->destination_id = $request->destination_id;

        $package->save();
        return redirect('admin/data-paket')->with('message', 'Data Berhasil Disimpan');
    }
    public function destroy($id)
    {
        DB::table('packages')->delete($id);
        return redirect()->back();
    }
}
