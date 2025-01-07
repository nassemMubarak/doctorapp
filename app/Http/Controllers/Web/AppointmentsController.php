<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Appointments;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Admin::where('type', 'doctor')->get();
        $newses = News::latest()->get();

        return view('web.appointments', [
            'doctors' => $doctors,
            'newses' => $newses,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'doctor_id' => 'required|exists:admins,id',
            'date' => 'required|date',
            'message' => 'nullable|string|min:5|max:255',
        ]);
 
 
        // $appointment = new Appointments();
        // $appointment->user_id = Auth::user()->id;
        // $appointment->doctor_id = $request->input("doctor_id");
        // $appointment->date = $request->input("date");
        // $appointment->message = $request->input("message");
        // $saved = $appointment->save();


        $appointments = Appointments::create([
            'user_id' => Auth::user()->id,
            'doctor_id' => $request->post('doctor_id'),
            'date' => $request->post('date'),
            'message' => $request->post('message'),
        ]);

        // dd($request->all(),$saved);

 
        return redirect()->route('appointments.index')->with('success', 'Appointments booked!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $app = Appointments::findOrfail($id);
        $app->delete();
        return redirect()->back()->with('success', 'Appointments cancelled!');
    }

    public function doctor(Request $request)
    {
        $doctor = Admin::findOrfail($request->id);
        return response()->json([
            'data' => $doctor
        ]);
    }
}
