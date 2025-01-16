<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use Illuminate\Http\Request;

class DriverlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Driver::orderBy('id', 'desc')->get();
        return view('backend.driver.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.driver.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $driver = new Driver;

        $driver->name = $request->name;
        $driver->email = $request->email;
        $driver->phone = $request->phone;
        $driver->details = $request->details;
        
        $driver->save();
        return redirect()->route('driver.index')->with('msg', "Driver Add Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Driver $driver)
    {
        return view('backend.driver.show',compact("driver"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Driver $driver)
    {
        return view('backend.driver.edit',compact('driver'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Driver $driver)
    {
        $driver->name = $request->name;
        $driver->email = $request->email;
        $driver->phone = $request->phone;
        $driver->details = $request->details;
        
        $driver->update();
        return redirect()->route('driver.index')->with('msg', "Driver Update Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Driver $driver)
    {
        $driver->delete();

        return redirect()->route('driver.index')->with('msg', 'Driver Deleted Successfully');
    }
}
