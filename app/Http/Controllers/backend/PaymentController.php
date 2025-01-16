<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Payment;
use Illuminate\Http\Request;


class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $items = Payment::orderBy('id', 'desc')->get();

    //     $items = Payment::select('payments.*', 'bookings.*', 'customers.*')
    // ->join('bookings', 'payments.booking_id', '=', 'bookings.id')
    // ->join('customers', 'customers.id', '=', 'bookings.customer_id')
    // ->get();


        return view('backend.payment.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $items = Booking::orderBy('id', 'desc')->get();
        return view('backend.payment.create', compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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
        return redirect()->route('payment.index')->with('msg', "Add Payment Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect()->route('payment.index')->with('msg', 'Payment Deleted Successfully');
    }
}
