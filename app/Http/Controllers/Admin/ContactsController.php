<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Yajra\DataTables\Facades\DataTables;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $this->authorize('view-Any', Contact::class);

        $data = Contact::select('*');
        if ($request->ajax()){
            return  DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('patient', function ($row) {
                    return $row->patient->name;
                })
                ->addColumn('subject', function ($row) {
                    return $row->subject;
                })
                ->addColumn('message', function ($row) {
                    return $row->message;
                })
                ->addColumn('date', function ($row) {
                    return $row->created_at;
                })
                ->addColumn('actions', function ($row) {
                    $btn = '<div style="display: flex; justify-content: space-evenly">';
                    if(Gate::allows('delete', $row)) {
                    $btn .=  '<form action="'. Route('admin.contacts.destroy', $row->id) .'" method="post" style="display: inline">
                                <input type="hidden" name="_token" value="'.csrf_token().'" />
                                <input name="_method" value="DELETE" type="hidden">
                                <button type="submit" class="btn btn-sm btn-clean btn-icon" title="Delete"><span class="svg-icon svg-icon-md"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path><path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path></g></svg></span></button>
                             </form>';
                    }
                        $btn .= '</div>';
                    return $btn;
                })
                ->rawColumns(['patient', 'subject', 'message', 'date', 'actions'])
                ->filter(function ($query) use ($request) {
                    if ($request->has('name') && $request->get('name') != null) {
                        $query->where('name', 'like', "%{$request->get('name')}%");
                    }
                    if ($request->has('email') && $request->get('email') != null) {
                        $query->category->where('email', 'like', "%{$request->get('email')}%");
                    }
                })
                ->toJson();;
        }

        return view('admin.contacts.index');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $this->authorize('view-Any', $contact);

        $contact->delete();
        return redirect()->route('admin.contacts.index')->with('success', 'User Message deleted!');
    }
}
