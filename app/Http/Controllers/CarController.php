<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $car = Car::all();
        return view('admin.rentalmobil.data-mobil', compact('car'));
    }

    public function create()
    {
        return view('admin.rentalmobil.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|max:100',
            'price' => 'required',
            'transmission' => 'required',
            'fuel' => 'required',
            'color' => 'required',
            'capacity' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('img/', $name);
        }

        $car = new Car;
        $car->image = $name;
        $car->name = $request->name;
        $car->price = $request->price;
        $car->transmission = $request->transmission;
        $car->fuel = $request->fuel;
        $car->color = $request->color;
        $car->capacity = $request->capacity;
        $car->driver = $request->driver == 'on' ? 1 : 0;
        $car->bbm = $request->bbm == 'on' ? 1 : 0;

        $car->save();
        return redirect('admin/data-mobil')->with('message', 'Data Berhasil Disimpan');

    }

    public function edit($id)
    {
        $car = Car::find($id);
        return view('admin.rentalmobil.edit', compact('car'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|max:100',
            'price' => 'required',
            'transmission' => 'required',
            'fuel' => 'required',
            'color' => 'required',
            'capacity' => 'required',
        ]);

        $car = Car::find($id);
        if ($request->hasFile('image')) {
            $galeri->deleteImage();
            $image = $request->file('image');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('img/', $name);
            $car->image = $name;
        }

        $car->name = $request->name;
        $car->price = $request->price;
        $car->transmission = $request->transmission;
        $car->fuel = $request->fuel;
        $car->color = $request->color;
        $car->capacity = $request->capacity;
        $car->driver = $request->driver == 'on' ? 1 : 0;
        $car->bbm = $request->bbm == 'on' ? 1 : 0;

        $car->save();
        return redirect('admin/data-mobil')->with('message', 'Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $car = Car::find($id);
        $car->delete();

        return redirect('admin/data-mobil')-with('message', 'Data Berhasil Dihapus');
    }
}