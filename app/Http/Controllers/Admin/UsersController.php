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

        // $data = User::select('*');
        // if ($request->ajax()){
        //     return  DataTables::of($data)
        //         ->addIndexColumn()
        //         ->addColumn('name', function ($row) {
        //             return $row->name;
        //         })
        //         ->addColumn('email', function ($row) {
        //             return $row->email;
        //         })
        //         ->addColumn('mobile', function ($row) {
        //             return $row->mobile;
        //         })
        //         ->addColumn('age', function ($row) {
        //             return $row->age;
        //         })
        //         ->addColumn('gender', function ($row) {
        //             if($row->gender == 'm'){
        //                 $g = 'Male';
        //             }else{
        //                 $g = 'Female';
        //             }
        //             return $g;
        //         })
        //         ->addColumn('birthday', function ($row) {
        //             return $row->birthday;
        //         })
        //         ->addColumn('status', function ($row) {
        //             return $row->status;
        //         })
        //         ->addColumn('diseases', function ($row) {
        //             return $row->diseases;
        //         })
        //         ->addColumn('image', function ($row) {
        //             $image = '<img src="'.$row->image_path.'" width="100px" height="100px">';
        //             return $image;
        //         })
        //         ->addColumn('actions', function ($row) {
        //             $btn = '<div style="display: flex; justify-content: space-evenly">';
        //             if(Gate::allows('update', $row)) {
        //                    $btn .= '<a id="edit" data-toggle="modal" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details"><span class="svg-icon svg-icon-md"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path><rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect></g></svg></span></a>
        //                     ';
        //             }
        //             if(Gate::allows('delete', $row)) {
        //                   $btn.=  '<form action="'. Route('admin.users.destroy', $row->id) .'" method="post" style="display: inline">
        //                         <input type="hidden" name="_token" value="'.csrf_token().'" />
        //                         <input name="_method" value="DELETE" type="hidden">
        //                         <button type="submit" class="btn btn-sm btn-clean btn-icon" title="Delete"><span class="svg-icon svg-icon-md"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path><path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path></g></svg></span></button>
        //                      </form>';
        //             }
        //              $btn.=  '</div>
        //                     ';
        //             return $btn;
        //         })
        //         ->rawColumns(['name', 'email','mobile', 'age', 'image', 'gender', 'birthday', 'status', 'diseases', 'actions'])
        //         ->filter(function ($query) use ($request) {
        //             if ($request->has('name') && $request->get('name') != null) {
        //                 $query->where('name', 'like', "%{$request->get('name')}%");
        //             }
        //             if ($request->has('email') && $request->get('email') != null) {
        //                 $query->category->where('email', 'like', "%{$request->get('email')}%");
        //             }
        //         })
        //         ->toJson();
        // }
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
