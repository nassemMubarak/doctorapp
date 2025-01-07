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
            'appointments' => Appointments::where('user_id', Auth::user()->id)->get(),

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
        // Validate the incoming request
        $request->validate([
            'doctor_id' => 'required|exists:admins,id', // Ensure doctor_id exists in admins table
            'date' => 'required|date', // Ensure date is in a valid format
            'message' => 'nullable|string|min:5|max:255', // Message can be optional but must adhere to limits if present
        ]);
    
        try {
            // Create a new appointment
            $appointment = new Appointments();
            $appointment->user_id = Auth::user()->id; // The authenticated user's ID
            $appointment->doctor_id = $request->input("doctor_id");
            $appointment->date = $request->input("date");
            $appointment->message = $request->input("message");
            
            // Save the appointment to the database
            $saved = $appointment->save();
    
            // If the save is successful, redirect to the appointments page
            return redirect()->route('appointments.index')->with('success', 'Appointment booked!');
    
        } catch (\Illuminate\Database\QueryException $e) {
            // Catch any database-related exceptions and display the error message
            // This will give you more insight into why the save failed
            return back()->with('error', 'An error occurred while booking your appointment: ' . $e->getMessage());
        } catch (\Exception $e) {
            // Catch other general exceptions
            return back()->with('error', 'An unexpected error occurred: ' . $e->getMessage());
        }
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
