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
        $data = Admin::where('type', 'doctor')->select('*');
        if ($request->ajax()){
            return  DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('name', function ($row) {
                    return $row->name;
                })
                ->addColumn('email', function ($row) {
                    return $row->email;
                })
                ->addColumn('age', function ($row) {
                    return $row->age;
                })
                ->addColumn('gender', function ($row) {
                    if($row->gender == 'm'){
                        $g = 'Male';
                    }else{
                        $g = 'Female';
                    }
                    return $g;
                })
                ->addColumn('city', function ($row) {
                    return $row->city;
                })
                ->addColumn('country_of_graduation', function ($row) {
                    return $row->country_of_graduation;
                })
                ->addColumn('specialization', function ($row) {
                    return $row->specialization;
                })
                ->addColumn('specialization_desc', function ($row) {
                    return $row->specialization_desc;
                })
                ->addColumn('years_of_experience', function ($row) {
                    return $row->years_of_experience;
                })
                ->addColumn('description', function ($row) {
                    return $row->description;
                })
                ->addColumn('image', function ($row) {
                    $image = '<img src="'.$row->image_path.'" width="100px" height="100px">';
                    return $image;
                })
                ->addColumn('appointments', function ($row) {
                    return $row->appointments;
                })
                ->addColumn('actions', function ($row) {
                    $btn = '<div style="display: flex; justify-content: space-evenly">';
                    if(Gate::allows('update', $row)) {
                        $btn .= '<a id="edit" data-toggle="modal" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details"><span class="svg-icon svg-icon-md"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path><rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect></g></svg></span></a>
                            ';
                    }
                    if(Gate::allows('delete', $row)) {
                        $btn .= '<form action="'. Route('admin.admins.destroy', $row->id) .'" method="post" style="display: inline">
                                <input type="hidden" name="_token" value="'.csrf_token().'" />
                                <input name="_method" value="DELETE" type="hidden">
                                <button type="submit" class="btn btn-sm btn-clean btn-icon" title="Delete"><span class="svg-icon svg-icon-md"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path><path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path></g></svg></span></button>
                             </form>';
                    }
                    $btn .= '</div>';
                    return $btn;
                })
                ->rawColumns(['name', 'email', 'age', 'image', 'gender', 'city', 'country_of_graduation', 'specialization', 'specialization_desc', 'years_of_experience', 'description', 'appointments','actions'])
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

        return view('admin.admins.index',[
            'countries' => $countries
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
//        dd($request->all());
        $this->authorize('create', Admin::class);
        
        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|unique:admins,email',
            'password' => ['required','confirmed'], //, Password::min(8)->letters()->mixedCase()->numbers()->symbols()],
            'password_confirmation' => 'required|same:password',
            'age' => 'required|string',
            'gender' => 'required|string',
            'city' => 'required|string',
            'country_of_graduation' => 'required|string',
            'specialization' => 'required|string',
            'specialization_desc_one' => 'required|string',
            'specialization_desc_two' => 'required|string',
            'specialization_desc_three' => 'required|string',
            'years_of_experience' => 'required',
            'description' => 'nullable',
            "appointments" => ["required","array","min:3","max:10"],
            "appointments.*" => ["required"],
            'image' => 'required|image|max:512000|dimensions:min_width=100,min_height=100',
        ]);



        Image::addImage($request, 'admins');


        $admin = Admin::create([
            'name' => $request->post('name'),
            'email' => $request->post('email'),
            'mobile' => $request->post('mobile'),
            'age' => $request->post('age'),
            'gender' => $request->post('gender'),
            'city' => $request->post('city'),
            'country_of_graduation' => $request->post('country_of_graduation'),
            'specialization' => $request->post('specialization'),
            'specialization_desc' => json_encode(["$request->specialization_desc_one", "$request->specialization_desc_two", "$request->specialization_desc_three"]),
            'years_of_experience' => $request->post('years_of_experience'),
            'description' => $request->post('description'),
            'password' => Hash::make($request->post('password')),
            'appointments' => json_encode($request->post('appointments')),
            'image_url' => $request->image_url,
        ]);

        return redirect()->route('admin.admins.index')->with('success', 'Doctor created!');
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
        $this->authorize('update', Admin::class);
        return view('admin.users.edit', [
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
            'name' => 'required|string|min:3|max:255',
            'email' => ['required', Rule::unique('admins')->ignore($admin->id)],
            'age' => 'required|string',
            'gender' => 'required|string',
            'city' => 'required|string',
            'country_of_graduation' => 'required|string',
            'specialization' => 'required|string',
            'specialization_desc_one' => 'required|string',
            'specialization_desc_two' => 'required|string',
            'specialization_desc_three' => 'required|string',
            'years_of_experience' => 'required',
            "appointments" => ["required","array","min:3","max:10"],
            "appointments.*" => ["required"],
            'description' => 'nullable',
            'image' => 'nullable|image|max:512000|dimensions:min_width=100,min_height=100',
        ]);

        Image::updateImage($request, $admin, 'admins');

        $admin->update([
            'name' => $request->post('name'),
            'email' => $request->post('email'),
            'mobile' => $request->post('mobile'),
            'age' => $request->post('age'),
            'gender' => $request->post('gender'),
            'city' => $request->post('city'),
            'country_of_graduation' => $request->post('country_of_graduation'),
            'specialization' => $request->post('specialization'),
            'specialization_desc' => json_encode(["$request->specialization_desc_one", "$request->specialization_desc_two", "$request->specialization_desc_three"]),
            'years_of_experience' => $request->post('years_of_experience'),
            'appointments' => json_encode($request->post('appointments')),
            'description' => $request->post('description'),
            'image_url' => $request->image_url,
        ]);
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
