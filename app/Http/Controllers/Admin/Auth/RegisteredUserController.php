<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create()
    {
         
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate the request
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8'],
            'specialty' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string'],
            'address' => ['required', 'string', 'max:255'],
        ]);
         // Create the doctor
        $doctor = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'specialty' => $request->specialty,
            'type' => 'doctor',
            'phone_number' => $request->phone_number,
            'address' => $request->address,
        ]);
 
        // Fire the Registered event
        event(new Registered($doctor));
    
        // Automatically log in the doctor
        Auth::login($doctor);
    
        // Redirect to the home page
        return redirect(RouteServiceProvider::HOME);
    }
    }
