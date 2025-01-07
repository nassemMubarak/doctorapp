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
//        dd($request->all());
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            // 'password' => ['required', 'confirmed', Rules\Password::defaults()],
            // 'password_confirmation' => 'required|same:password',
            'mobile' => 'required|unique:users,mobile',
            'birthday' => 'required|string',
            'diseases[]' => 'nullable',
        ]);
        $status = 'sick';
        if ($request->diseases == null){
            $request->merge([
               'status' => 'unsick',
            ]);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make(123),
            'mobile' => $request->post('mobile'),
            'age' => $request->post('age'),
            'gender' => $request->post('gender'),
            'birthday' => $request->post('birthday'),
            'status' => $status,
            'diseases' => $request->post('diseases') == null ?  json_encode([]) : json_encode($request->post('diseases')),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
