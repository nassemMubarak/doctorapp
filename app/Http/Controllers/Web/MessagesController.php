<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Helpers\Image;


class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
//        dd($request->all());
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'doctor_id' => 'required|exists:admins,id',
            'message' => 'required|string',
            'patient_prescription' => 'nullable'
        ]);
        Image::addFile($request, 'admins', 2);
        $msg = Message::create([
            'user_id' => $request->post('user_id'),
            'doctor_id' => $request->post('doctor_id'),
            'message' => $request->post('message'),
            'patient_prescription' => $request->patient_prescription,

        ]);

        return redirect()->back()->with('success', 'Your Message Sent Successfully');
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
        $msg = Message::findOrfail($id);
        $msg->delete();
        return redirect()->back()->with('success', 'Message Deleted!');
    }
}
