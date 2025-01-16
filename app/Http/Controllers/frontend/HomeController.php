<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\CarList;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $user = Customer::all();
        $carlists = CarList::orderBy('brand')->limit(9)->get();
        return view('frontend.home',compact('carlists', 'user'));
        // return view('frontend.home');
    }

    public function car_show(){
        $carlists = CarList::all();
        return view('frontend.car',compact('carlists'));
    }

}
