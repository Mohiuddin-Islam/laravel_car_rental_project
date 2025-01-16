<?php

namespace App\Http\Controllers\Auth\Customer;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login(): View
    {
        return view('frontend.login.customer_login');
    }

    public function check_user(Request $request): RedirectResponse
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->passes()) {

            if (Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('home');
            } else {
                return redirect()->route('customer.login')->with('error', 'Either Email/Password is incorrect');
            }

        }
    }




    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('customer')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }

}
