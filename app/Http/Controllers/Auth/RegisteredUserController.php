<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
    public function create(): View
    {
        return view('web.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate the input
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8'],
            'national_id' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'in:male,female'],
            'phone_number' => ['nullable', 'string'], //'max:15'
            'address' => ['nullable', 'string', 'max:255'],
            'identity_image' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'], // Max size 2MB
        ]);
    
        // Handle the uploaded identity image
        $identityImagePath = null;
        if ($request->hasFile('identity_image')) {
            $identityImagePath = $request->file('identity_image')->store('identity_images', 'public');
        }
    
        // Create the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'national_id' => $request->national_id,
            'gender' => $request->gender,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'identity_image' => $identityImagePath,
        ]);
    
        // Fire the Registered event
        event(new Registered($user));
    
        // Automatically log in the user
        Auth::login($user);
    
        // Redirect to the home page
        return redirect(RouteServiceProvider::HOME);
    }
}    