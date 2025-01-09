<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Image;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
// use Yajra\DataTables\DataTables;
use Illuminate\Database\QueryException;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $this->authorize('view-Any', User::class);

        $users = User::all();

        return view('admin.users.index', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', User::class);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
 
    public function store(Request $request)
    {
        $this->authorize('create', User::class);
    
        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|unique:users,email',
            'password' => ['required', 'confirmed'],
            'password_confirmation' => 'required|same:password',
            'national_id' => 'required|unique:users,national_id',
            'gender' => 'required|string|in:male,female',
            'phone_number' => 'required|unique:users,phone_number',
            'address' => 'nullable|string|max:255',
            'identity_image' => 'required|image|max:5120|mimes:jpg,jpeg,png',
        ]);
    
        try {
            // Store the identity image
            $identityImagePath = $request->file('identity_image')->store('identity_images', 'public');
            
            // Create the user
            $user = User::create([
                'name' => $request->post('name'),
                'email' => $request->post('email'),
                'password' => Hash::make($request->post('password')),
                'national_id' => $request->post('national_id'),
                'gender' => $request->post('gender'),
                'phone_number' => $request->post('phone_number'),
                'address' => $request->post('address'),
                'identity_image' => $identityImagePath,
            ]);
    
            return redirect()->route('admin.users.index')->with('success', 'User created successfully!');
        } catch (QueryException $e) {
            \Log::error('Database Error: ' . $e->getMessage(), ['exception' => $e]);
            return redirect()->back()->withErrors(['error' => 'Database error: ' . $e->getMessage()]);
        }
    }
        
    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $this->authorize('view', $user);

        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $this->authorize('update', $user);
        return view('admin.users.edit', [
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
    
        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|unique:users,email,' . $user->id,
            'password' => 'nullable|confirmed|min:6',
            'national_id' => 'required|unique:users,national_id,' . $user->id,
            'gender' => 'required|string|in:male,female',
            'phone_number' => 'required|unique:users,phone_number,' . $user->id,
            'address' => 'nullable|string|max:255',
            'identity_image' => 'nullable|image|max:5120|mimes:jpg,jpeg,png',
        ]);
    
        if ($request->hasFile('identity_image')) {
            $identityImagePath = $request->file('identity_image')->store('identity_images', 'public');
            $user->identity_image = $identityImagePath;
        }
    
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
    
        $user->update($request->except('password', 'password_confirmation', 'identity_image'));
    
        return redirect()->route('admin.users.index')->with('success', 'User updated successfully!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $this->authorize('delete', $user);

        Image::deleteImage($user, 'users');
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'User deleted!');
    }
}
