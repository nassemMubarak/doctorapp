<?php

namespace App\Http\Controllers\Web;

use App\Helpers\Image;
use App\Http\Controllers\Controller;
use App\Models\Appointments;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('web.profile', [
            'user' => Auth::user(),
            'appointments' => Appointments::where('user_id', Auth::user()->id)->get(),
            'messages' => Message::where('user_id', Auth::user()->id)->get()
        ]);
    }

    public function update(Request $request, User $profile)
    {
//        dd($request->all());
        $request->validate([
            'name' => 'required|string|min:5|max:255',
            'email' => ['required', Rule::unique('users')->ignore($profile->id)],
            'mobile' => ['required', Rule::unique('users')->ignore($profile->id)],
            'image' => 'nullable|image|max:512000|dimensions:min_width=100,min_height=100',
            'birthday' => 'required|string',
            'gender' => 'required|string',
            'diseases' => 'nullable',
        ]);

        Image::updateImage($request, $profile, 'users');

        $profile->update([
            'name' => $request->post('name'),
            'email' => $request->post('email'),
            'mobile' => $request->post('mobile'),
            'birthday' => $request->post('birthday'),
            'gender' => $request->post('gender'),
            'diseases' => $request->post('diseases') == null ?  json_encode([]) : json_encode($request->post('diseases')),
            'image_url' => $request->image_url ?? $profile->image_url,
        ]);
        return redirect()->route('profile')->with('success', 'Profile updated!');
    }

    public function updatePassword(Request $request)
    {
        // dd($request->all());
        $user = Auth::user();
        $request->validate([
            'current_password' => ['required',  new MatchOldPassword()],
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);

        $user->update([
            'password'=> Hash::make($request->password)
        ]);
        return redirect()->route('profile')->with('success', 'Password updated!');
    }
}
