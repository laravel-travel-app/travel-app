<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;

class DestinationController extends Controller
{
    public function index()
    {
        $destination = Destination::all();
        return view('admin.destinasi.data-destinasi', compact('destination'));
    }

    public function create()
    {
        return view('admin.destinasi.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|max:100',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('img/', $name);
        }

        $destination = new Destination;
        $destination->image = $name;
        $destination->name = $request->name;
        $destination->slug = \Str::slug($request->name);
        $destination->save();
        return redirect('admin/data-destinasi')->with('message', 'Data Berhasil Disimpan');
    }
}
