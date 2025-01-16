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
            'pick_up_date' => 'required|date',
            'drop_off_date' => 'required|date|after_or_equal:pick_up_date',
        ]);

        $carId = $request->carlist;
        $pickUpDate = Carbon::parse($request->pick_up_date);
        $dropOffDate = Carbon::parse($request->drop_off_date);

        $conflictingBookings = Booking::where('car_list_id', $carId)
                    ->where(function($query) use ($pickUpDate, $dropOffDate) {
                    $query->whereBetween('pick_up_date', [$pickUpDate, $dropOffDate])
                    ->orWhereBetween('drop_off_date', [$pickUpDate, $dropOffDate])
                    ->orWhere(function($query) use ($pickUpDate, $dropOffDate) {
                    $query->where('pick_up_date', '<=', $pickUpDate)
                    ->where('drop_off_date', '>=', $dropOffDate);
            });
            })
            ->exists();

        if ($conflictingBookings) {
            return redirect()->back()->with('msg1', 'The selected car is already booked for the chosen dates.');
        }

        $carlist = CarList::find($carId);
        $price = $carlist->price_per_day;

        $days = $pickUpDate->diffInDays($dropOffDate);
        $amount = $price * $days;

        Booking::create([
            'customer_id' => Auth::user()->id,
            'car_list_id' => $carId,
            'driver_id' => $request->driver,
            'pick_up_date' => $pickUpDate,
            'drop_off_date' => $dropOffDate,
            'amount' => $amount,
            'status' => 'pending',
        ]);

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
