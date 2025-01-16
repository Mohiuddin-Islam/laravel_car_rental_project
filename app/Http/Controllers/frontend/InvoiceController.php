<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller
{
    public function invoice($inid)
    {
    
    // $data = Payment::select('payments.*', 'bookings.*', 'customers.*')
    //     ->join('bookings', 'payments.booking_id', '=', 'bookings.id')
    //     ->join('customers', 'customers.id', '=', 'bookings.customer_id')
    //     ->where('payments.id', $iid)
    //     ->first();

    //dd($data); // Check the output

    $data = Payment::find($inid);
    //dd($data);
    $pdf = Pdf::loadView('backend.payment.invoice',compact('data'));
        // return $pdf->download();
    return $pdf->stream();

    }
}
