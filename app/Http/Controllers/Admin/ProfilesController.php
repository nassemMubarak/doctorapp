<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Image;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function index()
    {
        return view('admin.profiles.index');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|min:5',
            'email' => 'required|email',
            'phone_number' => 'required',
            'description' => 'nullable|string',
            'image' => 'nullable',
        ]);
        $admin = Admin::findOrfail($id);
        if($request->hasFile('image')) {
            if($admin->image_url !== null){
                unlink(public_path('uploads\\').$admin->image_url);
            }
            $file = $request->file('image');

            $image_file = $file->store('/' , [
                'disk' => 'uploads'
            ]);

            $request->merge([
                'image_url' => $image_file
            ]);
        }

        $admin->update([
            'name' => $request->post('name'),
            'email' => $request->post('email'),
            'phone_number' => $request->post('phone_number'),
            'description' => $request->post('description'),
            'image_url' => $request->image_url,
        ]);
        return redirect()->route('admin.profiles.index')->with('success', 'Profiles updated!');
    }

    public function viewPass()
    {
        return view('admin.profiles.change-password');
    }

    public function updatePass(Request $request, Admin $admin)
    {
        $request->validate([
            'current_password' => ['required',  new MatchOldPassword()],
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);

        $admin->update([
            'password'=> Hash::make($request->password)
        ]);
        return redirect()->route('admin.profiles.password')->with('success', 'Password updated!');

    }
}
