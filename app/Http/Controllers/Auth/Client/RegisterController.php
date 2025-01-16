<?php

namespace App\Http\Controllers\Auth\Client;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use App\Models\Client;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(): View
    {
        return view('login.client_register');
    }

    public function check_user(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.Client::class],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);
        

        $client = Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'photo' => $request->photo,
            'status' =>$request->status
        ]);
        
        return redirect()->route('client.login');
    }
}
