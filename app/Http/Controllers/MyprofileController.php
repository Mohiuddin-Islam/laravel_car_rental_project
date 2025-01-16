<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Customer;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MyprofileController extends Controller
{
    public function myprofile()
    {

        $aid = Auth()->guard()->user()->id;
        $items = Booking::where('customer_id', $aid)->orderBy('id', 'desc')->get();
        

        // $customer = Customer::find(Auth::user()->id);
        // $items=DB::table('bookings')
        //             ->select('bookings.*', 'car_lists.*', 'drivers.*', 'drivers.name as driver_name', 'bookings.status as booking_status')
        //             ->join('car_lists', 'car_lists.id', '=', 'bookings.car_list_id')
        //             ->join('drivers', 'drivers.id', '=', 'bookings.driver_id')
        //             ->where('customer_id', Auth::user()->id)
        //             ->get();
        return view('frontend.myprofile', compact('items'));
    }

    public function payment($pid){
        
        $bookings = Booking::find($pid);
        return view('frontend.payment', compact('bookings'));
    }

    public function paystore(Request $request)
    {
        $request->validate([
            'customer' => 'required',
            'method' => 'required',
            'trxn' => 'required',
            'amount' =>'required',
            
        ]);

        $payment = new Payment;

        $payment->booking_id = $request->customer;
        $payment->trxn_id = $request->trxn;
        $payment->method = $request->method;
        $payment->amount = $request->amount;
        
        $payment->save();
        return redirect()->route('myprofile')->with('msg', "Add Payment Successfully");
    }
}
