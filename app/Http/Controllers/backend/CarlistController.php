<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\CarList;
use Illuminate\Http\Request;

class CarlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = CarList::orderBy('id', 'desc')->get();
        return view('backend.carlist.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.carlist.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'brand' => 'required|max:255',
            'model' => 'required|max:255',
            'engine' => 'required|max:255',
            'price' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required',
        ]);

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $photo = $destinationPath . $postImage;
        } else {
            $photo = 'images/nophoto.png';
        }

        $carlist = new CarList();

        $carlist->brand = $request->brand;
        $carlist->model = $request->model;
        $carlist->engine = $request->engine;
        $carlist->price_per_day = $request->price;
        $carlist->image = $photo;
        $carlist->status = $request->status;
        $carlist->save();

        return redirect()->route('carlist.index')->with('msg', "Car Add Successfully");
    }


    /**
     * Display the specified resource.
     */
    public function show(CarList $carlist)
    {
        return view('backend.carlist.show', compact("carlist"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarList $carlist)
    {
        return view('backend.carlist.edit', compact('carlist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CarList $carlist)
    {

        $request->validate([
            'brand' => 'required|max:255',
            'model' => 'required|max:255',
            'engine' => 'required|max:255',
            'price' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required',
        ]);

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $photo = $destinationPath . $postImage;
        } else {
            $photo = 'images/nophoto.png';
        }

        $carlist->brand = $request->brand;
        $carlist->model = $request->model;
        $carlist->engine = $request->engine;
        $carlist->price_per_day = $request->price;
        $carlist->image = $photo;
        $carlist->status = $request->status;

        $carlist->update();
        return redirect()->route('carlist.index')->with('msg', 'Car Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarList $carlist)
    {
        $carlist->delete();

        return redirect()->route('carlist.index')->with('msg', 'Car Delete Successfully');
    }
}
