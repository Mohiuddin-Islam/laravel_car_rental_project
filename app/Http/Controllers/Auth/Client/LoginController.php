<?php

namespace App\Http\Controllers\Auth\Client;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login(): View
    {
        return view('login.client_login');
    }

    public function check_user(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'password' => ['required', 'string'],
            
        ]);

        if(! Auth::guard('client')->attempt($request->only('email', 'password'), $request->boolean('remember')))
        {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::CLIENT_DASHBOARD);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('client')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/client/login');
    }
}


