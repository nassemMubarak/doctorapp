<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Image;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Yajra\DataTables\DataTables;
use Symfony\Component\Intl\Countries;

class AdminsController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $this->authorize('view-Any', Admin::class);

        $countries = Countries::getNames(App::currentLocale());


        $doctors = Admin::where('type', 'doctor')
        ->paginate(10); // Adjust pagination as needed



        return view('admin.admins.index',[
            'countries' => $countries,
            'doctors' => $doctors
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('view', Admin::class);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('create', Admin::class);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins,email'],
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
        
        // Save the doctor to the database
        $doctor->save();

        // Redirect to a page with success message or back to the form with a success message
        return redirect()->route('admin.admins.index')->with('success', 'Doctor added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        $this->authorize('view', $admin);
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        // $this->authorize('update', Admin::class);
        // dd($admin);
        return view('admin.admins.edit', [
            'admin' => $admin,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        $this->authorize('update', $admin);
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => 'required|email|unique:admins,email,' . $admin->id,
            'password' => 'nullable|string|min:6|confirmed',
            'specialty' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string'],
            'address' => ['required', 'stringe', 'max:255'],
        ]);
         // Create the doctor
         
 
        $admin->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'specialty' => $request->specialty,
            'type' => 'doctor',
            'phone_number' => $request->phone_number,
            'address' => $request->address,
        ]);
        $admin->save();

        return redirect()->route('admin.admins.index')->with('success', 'Doctor updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        $this->authorize('delete', $admin);
        Image::deleteImage($admin, 'admins');
        $admin->delete();
        return redirect()->route('admin.admins.index')->with('success', 'Doctor deleted!');
    }
}
