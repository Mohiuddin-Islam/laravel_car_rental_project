<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\CarList;
use App\Models\Driver;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        // Functionality here if needed
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $drivers = Driver::all();
        $carlists = CarList::all();
        return view('frontend.booking', compact('carlists', 'drivers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'carlist' => 'required',
            'driver' => 'required',
            'pick_up_date' => 'required',
            'drop_off_date' => 'required',
        ]);


    $id = $request->carlist;
    $carlist = CarList::find($id);
    $price = $carlist->price_per_day;

    $pick_up_date = $request->pick_up_date;
    $drop_off_date = $request->drop_off_date;

    $pick_up = Carbon::parse($pick_up_date); 
    $drop_off = Carbon::parse($drop_off_date); 
    $days = $pick_up->diffInDays($drop_off);
    

        $app = new Booking();
        $app->customer_id = Auth::user()->id;
        $app->pick_up_date = $request->pick_up_date;
        $app->drop_off_date = $request->drop_off_date;
        $app->car_list_id = $request->carlist;
        $app->driver_id = $request->driver; // corrected 'car_lists' to 'carlist'
        $app->amount = $price * $days;

        $app->save();

        return redirect()->back()->with('msg', 'Successfully Booking Done');
    }


    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        // Functionality here if needed
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        // Functionality here if needed
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        // Functionality here if needed
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        // Functionality here if needed
    }
}
