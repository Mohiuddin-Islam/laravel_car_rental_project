<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\CarList;
use App\Models\Customer;
use App\Models\Driver;
use Carbon\Carbon;
use Illuminate\Http\Request;


class BookinglistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Booking::orderBy('id', 'desc')->get();
        return view('backend.booking.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers = Customer::orderBy('id', 'desc')->get();
        $carlists = CarList::all();
        $drivers = Driver::all();
        return view('backend.booking.create',compact('carlists','drivers', 'customers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer' => 'required',
            'carlist' => 'required',
            'driver' => 'required',
            'pick_up_date' =>'required',
            'drop_off_date' =>'required',
            
        ]);

        $id = $request->carlist;
        $carlist = CarList::find($id);
        $price = $carlist->price_per_day;

        $pick_up_date = $request->pick_up_date; 
        $drop_off_date = $request->drop_off_date; 
        $pick_up = Carbon::parse($pick_up_date); 
        $drop_off = Carbon::parse($drop_off_date); 
        $days = $pick_up->diffInDays($drop_off);


        $booking = new Booking;

        $booking->customer_id = $request->customer;
        $booking->car_list_id = $request->carlist;
        $booking->driver_id = $request->driver;
        $booking->pick_up_date = $request->pick_up_date;
        $booking->drop_off_date = $request->drop_off_date;
        $booking->amount = $price * $days;
        
        $booking->save();
        return redirect()->route('booking.index')->with('msg', "Add Booking Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('booking.index')->with('msg', 'Booking Deleted Successfully');
    }

    public function changeStatus($id)
    {
        $record = Booking::find($id);
        $record->status =='pending' ? $record->status ='confirm': $record->status ='pending';
        
        $record->update();
        return redirect()->back();
    
    }

}
