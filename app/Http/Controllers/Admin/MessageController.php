<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Image;
use App\Http\Controllers\Controller;
use App\Models\Appointments;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $this->authorize('view-Any', Appointments::class);
        $admin = Auth::user();
        if ($admin->type === 'admin') {
            $data = Message::select('*');
        }else{
            $data = Message::where('doctor_id', $admin->id)->select('*');
        }
        if ($request->ajax()) {
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('patient', function ($row) {
                    return $row->user->name;
                })
                ->addColumn('doctor', function ($row) {
                    return $row->doctor->name;
                })
                ->addColumn('message', function ($row) {
                    return $row->message;
                })
                ->addColumn('replay', function ($row) {
                    return $row->replay;
                })
                ->addColumn('file_path', function ($row) {
                    $file = '';
                    if($row->patient_prescription != null){
                    $file = '<a href="'. $row->patient_file_path . '" download>download</a>';
                    }
                    return $file;
                })
                ->addColumn('actions', function ($row) {
                    $btn = '
                        <div style="display: flex; justify-content: space-evenly">
                            <a id="edit" data-toggle="modal" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details"><span class="svg-icon svg-icon-md"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path><rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect></g></svg></span></a>
                            <form action="' . Route('admin.messages.destroy', $row->id) . '" method="post" style="display: inline">
                                <input type="hidden" name="_token" value="' . csrf_token() . '" />
                                <input name="_method" value="DELETE" type="hidden">
                                <button type="submit" class="btn btn-sm btn-clean btn-icon" title="Delete"><span class="svg-icon svg-icon-md"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path><path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path></g></svg></span></button>
                             </form>
                        </div>
                            ';
                    return $btn;
                })
                ->rawColumns(['patient', 'doctor', 'time', 'date', 'message', 'file_path','actions'])
                ->filter(function ($query) use ($request) {
                    if ($request->has('name') && $request->get('name') != null) {
                        $query->where('name', 'like', "%{$request->get('name')}%");
                    }
                    if ($request->has('email') && $request->get('email') != null) {
                        $query->category->where('email', 'like', "%{$request->get('email')}%");
                    }
                })
                ->toJson();
        }

        return view('admin.messages.index');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        $this->authorize('create', Appointments::class);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('create', Message::class);
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'date' => 'required|date',
            'time' => 'required',
            'message' => 'nullable|string|min:5|max:255',
        ]);


        $message = Message::create([
            'user_id' => $request->post('user_id'),
            'doctor_id' => Auth::user()->id,
            'date' => $request->post('date'),
            'time' => $request->post('time'),
            'message' => $request->post('message'),
            'image_url' => $request->image_url,

        ]);

        return redirect()->route('admin.messages.index')->with('success', 'Message created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        $this->authorize('view', Message::class);
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        $this->authorize('update', Appointments::class);
        return view('admin.messages.edit', [
            'message' => $message,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $message = Message::findOrfail($request->id);
        $this->authorize('update', $message);
        $request->validate([
            'replay' => 'required|string|min:5|max:255',
        ]);
        Image::addFile($request, 'admins', 1);
        $message->update([
            'replay' => $request->post('replay'),
            'doctor_prescription' => $request->doctor_prescription,

        ]);
        return redirect()->route('admin.messages.index')->with('success', 'Message replayed!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        $this->authorize('delete', $message);
        $message->delete();
        return redirect()->route('admin.messages.index')->with('success', 'Message deleted!');
    }
}
