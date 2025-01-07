@extends('admin.layouts.layout')

@section('content')
<div>
    <!--begin::Card-->
    <div class="card card-custom gutter-b">
        <div class="card-header flex-wrap border-0">
            <div class="card-title">
                <h3 class="card-label">All Doctors
                </h3>
            </div>
            <div class="card-toolbar">
                <!--begin::Button-->
                <button type="button" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#userAddModal">
                    <span class="svg-icon svg-icon-md">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <circle fill="#000000" cx="9" cy="15" r="6" />
                                <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>Add Doctor
                </button>

                <!--end::Button-->
            </div>
        </div>
        <div class="container border-0 pt-6 pb-0" style="background-color: transparent; min-height: 70px">

            <!--begin::Card-->
            <div class="gutter-b example example-compact">
                <div class="contentTable">
                    <button type="button" class="btn btn-secondary btn--filter" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="icon-xl la la-sliders-h"></i>{{__('filter')}}</button>
                    <div class="collapse mt-5" id="collapseExample">
                        <div class="card border-0">
                            <div class="card-body">
                                <div class="form-group row mt-3">
                                    <label class="col-lg-1 col-form-label">Name</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" name="name" value="{{request('name')?request('name'):''}}" placeholder="name..." />
                                    </div>
                                    <label class="col-lg-1 col-form-label">Email</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" name="email" value="{{request('email')?request('email'):''}}" placeholder="email..." />
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label class="col-lg-1 col-form-label">Mobile</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" name="phone_number" value="{{request('phone_number')?request('phone_number'):''}}" placeholder="phone number..." />
                                    </div>
                                    <label class="col-lg-1 col-form-label">Address</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" name="address" value="{{request('address')?request('address'):''}}" placeholder="address..." />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <div class="card-body">
            <!--begin: Datatable-->
            <table class="table-bordered table-responsive" id="table_id">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>City</th>
                        <th>Country of Graduation</th>
                        <th>Specialization</th>
                        <th>Specialization Description</th>
                        <th>Years of Experience</th>
                        <th>Appointments</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            <!--end: Datatable-->
        </div>
    </div>
    <!--end::Card-->
</div>

<!-- Add Modal -->
<div class="modal fade" id="userAddModal" tabindex="-1" role="dialog" aria-labelledby="userAddModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content modal-dialog">
            <form class="form" action="{{ route('admin.admins.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Doctor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3">{{ __('Image') }}</label>
                        <div class="col-lg-9">
                            <div class="image-input image-input-outline" id="kt_image_1">
                                <div class="image-input-wrapper" style="background-image: url({{asset('assets/admin/assets/media/users/blank.png')}});
                                                            width: 120px;
                                                            height: 120px;"></div>
                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Add Image">
                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                    <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="image_remove" />
                                </label>

                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Remove Image">
                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-form-label col-lg-3">{{ __('Name') }}</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-solid @error('name')  is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="name..." />
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-form-label col-lg-3">{{ __('Email') }}</label>
                        <div class="col-lg-9">
                            <input type="email" class="form-control form-control-solid @error('email')  is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email..." />
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-form-label col-lg-3">{{ __('Password') }}</label>
                        <div class="col-lg-9">
                            <input type="password" class="form-control form-control-solid @error('password')  is-invalid @enderror" name="password" value="{{ old('password') }}" placeholder="Password" />
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-form-label col-lg-3">{{ __('Confirm Password') }}</label>
                        <div class="col-lg-9">
                            <input type="password" class="form-control form-control-solid @error('password_confirmation')  is-invalid @enderror" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm password" />
                            @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-form-label col-lg-3">{{ __('Age') }}</label>
                        <div class="col-lg-9">
                            <input type="number" class="form-control form-control-solid @error('age')  is-invalid @enderror" name="age" value="{{ old('age') }}" placeholder="age..." />
                            @error('age')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-form-label col-lg-3">{{ __('Gender') }}</label>
                        <div class="col-lg-9">
                            <select name="gender" class="form-control form-control-solid">
                                <option value="m" name="gender">Male</option>
                                <option value="f" name="gender">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-form-label col-lg-3">{{ __('City') }}</label>
                        <div class="col-lg-9">
                            <select name="city" class="form-control form-control-solid">
                                @foreach($countries as $country)
                                <option value="{{$country}}" name="gender">{{$country}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-form-label col-lg-3">{{ __('Country of Graduation') }}</label>
                        <div class="col-lg-9">
                            <select name="country_of_graduation" class="form-control form-control-solid">
                                @foreach($countries as $country)
                                <option value="{{$country}}" name="gender">{{$country}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-form-label col-lg-3">{{ __('Specialization') }}</label>
                        <div class="col-lg-9">
                            <select name="specialization" class="form-control form-control-solid" required>
                                <option value="">Select Specialization...</option>
                                <option value="General surgery" name="specialization">General surgery</option>
                                <option value="Internal medicine" name="specialization">Internal medicine</option>
                                <option value="Orthopedic medicine" name="specialization">Orthopedic medicine</option>
                                <option value="Operations nursing" name="specialization">Operations nursing</option>
                                <option value="Cardiac specialty" name="specialization">Cardiac specialty</option>
                                <option value="Radiology specialty" name="specialization">Radiology specialty</option>
                                <option value="Waistcoat specialty" name="specialization">Waistcoat specialty</option>
                                <option value="Vascular surgery" name="specialization">Vascular surgery</option>
                                <option value="General and emergency surgery" name="specialization">General and emergency surgery</option>
                                <option value="Hematology specialty" name="specialization">Hematology specialty</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-form-label col-lg-3">{{ __('Specialization Description') }}</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-solid @error('specialization_desc_one')  is-invalid @enderror mb-5" name="specialization_desc_one" value="{{ old('specialization_desc_one') }}" placeholder="specialization description one..." />
                            @error('specialization_desc_one')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            <input type="text" class="form-control form-control-solid @error('specialization_desc_two')  is-invalid @enderror mb-5" name="specialization_desc_two" value="{{ old('specialization_desc_two') }}" placeholder="specialization description two..." />
                            @error('specialization_desc_two')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            <input type="text" class="form-control form-control-solid @error('specialization_desc_three')  is-invalid @enderror" name="specialization_desc_three" value="{{ old('specialization_desc_three') }}" placeholder="specialization description three..." />
                            @error('specialization_desc_three')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-form-label col-lg-3">{{ __('Years of Experience') }}</label>
                        <div class="col-lg-9">
                            <input type="number" class="form-control form-control-solid @error('years_of_experience')  is-invalid @enderror" name="years_of_experience" value="{{ old('years_of_experience') }}" placeholder="years of experience..." />
                            @error('years_of_experience')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">{{ __('Appointments') }}</label>
                        <div class="col-9 col-form-label">
                            <label class="checkbox checkbox-outline checkbox-success">
                                <input type="checkbox" name="appointments[]" value="9:00 - 10:00 am"/>
                                <span></span>
                                9:00 - 10:00 am
                            </label>
                            <label class="checkbox checkbox-outline checkbox-success">
                                <input type="checkbox" name="appointments[]" value="10:00 - 11:00 am"/>
                                <span></span>
                                10:00 - 11:00 am
                            </label>


                            <label class="checkbox checkbox-outline checkbox-success">
                                <input type="checkbox" name="appointments[]" value="11:00 - 12:00 am"/>
                                <span></span>
                                11:00 - 12:00 am
                            </label>
                            <label class="checkbox checkbox-outline checkbox-success">
                                <input type="checkbox" name="appointments[]" value="12:00 - 1:00 pm"/>
                                <span></span>
                                12:00 - 1:00 pm
                            </label>

                            <label class="checkbox checkbox-outline checkbox-success">
                                <input type="checkbox" name="appointments[]" value="1:00 - 2:00 pm"/>
                                <span></span>
                                1:00 - 2:00 pm
                            </label>
                            <label class="checkbox checkbox-outline checkbox-success">
                                <input type="checkbox" name="appointments[]" value="2:00 - 3:00 pm"/>
                                <span></span>
                                2:00 - 3:00 pm
                            </label>

                            <label class="checkbox checkbox-outline checkbox-success">
                                <input type="checkbox" name="appointments[]" value="3:00 - 4:00 pm"/>
                                <span></span>
                                3:00 - 4:00 pm
                            </label>
                            <label class="checkbox checkbox-outline checkbox-success">
                                <input type="checkbox" name="appointments[]" value="4:00 - 5:00 pm"/>
                                <span></span>
                                4:00 - 5:00 pm
                            </label>

                            <label class="checkbox checkbox-outline checkbox-success">
                                <input type="checkbox" name="appointments[]" value="5:00 - 6:00 pm"/>
                                <span></span>
                                5:00 - 6:00 pm
                            </label>
                            <label class="checkbox checkbox-outline checkbox-success">
                                <input type="checkbox" name="appointments[]" value="6:00 - 7:00 pm"/>
                                <span></span>
                                6:00 - 7:00 pm
                            </label>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-form-label col-lg-3">{{ __('Description') }}</label>
                        <div class="col-lg-9">
                            <textarea type="text" class="form-control form-control-solid @error('description')  is-invalid @enderror" name="description" value="{{ old('description') }}" placeholder="write description..."></textarea>
                            @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="AddUser">Add</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- End Add Modal   --}}

<!-- Edit Modal -->
<div class="modal fade" id="userEditModal" tabindex="-1" role="dialog" aria-labelledby="userEditModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content modal-dialog">
            <form id="form" class="form" action="{{ route('admin.users.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Show Doctor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3">{{ __('Image') }}</label>
                        <div class="col-lg-9">
                            <div class="image-input image-input-outline" id="kt_image_2">
                                <div class="image-input-wrapper" id="setImage" style="background-image: url({{asset('assets/admin/assets/media/users/blank.png')}});
                                                            width: 120px;
                                                            height: 120px;"></div>
                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Add Image">
                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                    <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="image_remove" />
                                </label>

                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Remove Image">
                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row ">
                        <label class="col-form-label col-lg-3">{{ __('Name') }}</label>
                        <div class="col-lg-9">
                            <input type="text" id="name" class="form-control form-control-solid @error('name')  is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="name..." />
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-form-label col-lg-3">{{ __('Email') }}</label>
                        <div class="col-lg-9">
                            <input type="email" id="email" class="form-control form-control-solid @error('email')  is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email..." />
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-form-label col-lg-3">{{ __('Age') }}</label>
                        <div class="col-lg-9">
                            <input type="number" id="age" class="form-control form-control-solid @error('age')  is-invalid @enderror" name="age" value="{{ old('age') }}" placeholder="age..." />
                            @error('age')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-form-label col-lg-3">{{ __('Gender') }}</label>
                        <div class="col-lg-9">
                            <select name="gender" id="gender" class="form-control form-control-solid">
                                <option value="m" name="gender">Male</option>
                                <option value="f" name="gender">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-form-label col-lg-3">{{ __('City') }}</label>
                        <div class="col-lg-9">
                            <select name="city" class="form-control form-control-solid">
                                @foreach($countries as $country)
                                <option value="{{$country}}" name="gender">{{$country}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-form-label col-lg-3">{{ __('Country of Graduation') }}</label>
                        <div class="col-lg-9">
                            <select name="country_of_graduation" class="form-control form-control-solid">
                                @foreach($countries as $country)
                                <option value="{{$country}}" name="gender">{{$country}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-form-label col-lg-3">{{ __('Specialization') }}</label>
                        <div class="col-lg-9">
                            <select name="specialization" class="form-control form-control-solid" id="specialization">
                                <option value="">Select Specialization...</option>
                                <option value="General surgery" name="specialization">General surgery</option>
                                <option value="Internal medicine" name="specialization">Internal medicine</option>
                                <option value="Orthopedic medicine" name="specialization">Orthopedic medicine</option>
                                <option value="Operations nursing" name="specialization">Operations nursing</option>
                                <option value="Cardiac specialty" name="specialization">Cardiac specialty</option>
                                <option value="Radiology specialty" name="specialization">Radiology specialty</option>
                                <option value="Waistcoat specialty" name="specialization">Waistcoat specialty</option>
                                <option value="Vascular surgery" name="specialization">Vascular surgery</option>
                                <option value="General and emergency surgery" name="specialization">General and emergency surgery</option>
                                <option value="Hematology specialty" name="specialization">Hematology specialty</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-form-label col-lg-3">{{ __('Specialization Description') }}</label>
                        <div class="col-lg-9">
                            <input type="text" id="specialization_desc_one" class="form-control form-control-solid @error('specialization_desc_one')  is-invalid @enderror mb-5" name="specialization_desc_one" value="{{ old('specialization_desc_one') }}" placeholder="specialization description one..." />
                            @error('specialization_desc_one')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            <input type="text" id="specialization_desc_two" class="form-control form-control-solid @error('specialization_desc_two')  is-invalid @enderror mb-5" name="specialization_desc_two" value="{{ old('specialization_desc_two') }}" placeholder="specialization description two..." />
                            @error('specialization_desc_two')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            <input type="text" id="specialization_desc_three" class="form-control form-control-solid @error('specialization_desc_three')  is-invalid @enderror" name="specialization_desc_three" value="{{ old('specialization_desc_three') }}" placeholder="specialization description three..." />
                            @error('specialization_desc_three')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-form-label col-lg-3">{{ __('Years of Experience') }}</label>
                        <div class="col-lg-9">
                            <input type="number" id="years_of_experience" class="form-control form-control-solid @error('years_of_experience')  is-invalid @enderror" name="years_of_experience" value="{{ old('years_of_experience') }}" placeholder="years of experience..." />
                            @error('years_of_experience')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">{{ __('Appointments') }}</label>
                        <div class="col-9 col-form-label" id="appointments">

                                <label class="checkbox checkbox-outline checkbox-success">
                                    <input type="checkbox" name="appointments[]" value="9:00 - 10:00 am"/>
                                    <span></span>
                                    9:00 - 10:00 am
                                </label>
                                <label class="checkbox checkbox-outline checkbox-success">
                                    <input type="checkbox" name="appointments[]" value="10:00 - 11:00 am"/>
                                    <span></span>
                                    10:00 - 11:00 am
                                </label>


                                <label class="checkbox checkbox-outline checkbox-success">
                                    <input type="checkbox" name="appointments[]" value="11:00 - 12:00 am"/>
                                    <span></span>
                                    11:00 - 12:00 am
                                </label>
                                <label class="checkbox checkbox-outline checkbox-success">
                                    <input type="checkbox" name="appointments[]" value="12:00 - 1:00 pm"/>
                                    <span></span>
                                    12:00 - 1:00 pm
                                </label>

                                <label class="checkbox checkbox-outline checkbox-success">
                                    <input type="checkbox" name="appointments[]" value="1:00 - 2:00 pm"/>
                                    <span></span>
                                    1:00 - 2:00 pm
                                </label>
                                <label class="checkbox checkbox-outline checkbox-success">
                                    <input type="checkbox" name="appointments[]" value="2:00 - 3:00 pm"/>
                                    <span></span>
                                    2:00 - 3:00 pm
                                </label>

                                <label class="checkbox checkbox-outline checkbox-success">
                                    <input type="checkbox" name="appointments[]" value="3:00 - 4:00 pm"/>
                                    <span></span>
                                    3:00 - 4:00 pm
                                </label>
                                <label class="checkbox checkbox-outline checkbox-success">
                                    <input type="checkbox" name="appointments[]" value="4:00 - 5:00 pm"/>
                                    <span></span>
                                    4:00 - 5:00 pm
                                </label>

                                <label class="checkbox checkbox-outline checkbox-success">
                                    <input type="checkbox" name="appointments[]" value="5:00 - 6:00 pm"/>
                                    <span></span>
                                    5:00 - 6:00 pm
                                </label>
                                <label class="checkbox checkbox-outline checkbox-success">
                                    <input type="checkbox" name="appointments[]" value="6:00 - 7:00 pm"/>
                                    <span></span>
                                    6:00 - 7:00 pm
                                </label>

                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-form-label col-lg-3">{{ __('Description') }}</label>
                        <div class="col-lg-9">
                            <textarea type="text" id="description" class="form-control form-control-solid @error('description')  is-invalid @enderror" name="description" value="{{ old('description') }}" placeholder="write description..."></textarea>
                            @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="EditUser">Save</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- End Edit Modal   --}}




@endsection

@push('scripts')
<script type="text/javascript">
    $(function() {
        let table = $('#table_id').DataTable({
            searching: false,
            processing: true,
            serverSide: true,
            // dom: '<"dt-top-container"<B><"dt-center-in-div"l><f>r>t<"dt-filter-spacer"><ip>',
            // dom: 'Bfrtip',
            ordering: false,

            ajax: {
                url: "{{ route('admin.admins.index') }}",
                data: function(d) {
                    d.name = $('input[name="name"]').val()
                    d.description = $('input[name="description"]').val()
                }

            },
            columns: [{
                    data: 'id',
                    name: 'id',
                },
                {
                    data: 'image',
                    name: 'image',
                },
                {
                    data: 'name',
                    name: 'name',
                },
                {
                    data: 'email',
                    name: 'email',
                },
                {
                    data: 'gender',
                    name: 'gender',
                },
                {
                    data: 'age',
                    name: 'age',
                },
                {
                    data: 'city',
                    name: 'city',
                },
                {
                    data: 'country_of_graduation',
                    name: 'country_of_graduation',
                },
                {
                    data: 'specialization',
                    name: 'specialization',
                },
                {
                    data: 'specialization_desc',
                    name: 'specialization_desc',
                },
                {
                    data: 'years_of_experience',
                    name: 'years_of_experience',
                },
                {
                    data: 'appointments',
                    name: 'appointments',
                },
                {
                    data: 'description',
                    name: 'description',
                },
                {
                    data: 'actions',
                    name: 'actions',
                },
            ],
            columnDefs: [{
                className: 'text-center',
                targets: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13 ]
            }, ],
        });


        $('input').on('keyup', function(e) {
            table.draw();
            e.preventDefault();
        });


    });

    $('#table_id').on('click', 'tbody td #edit', function() {

        let tr = $(this).closest("tr");
        let tr_id = tr.find("td:nth-child(1)").text();
        let tr_name = tr.find("td:nth-child(3)").text();
        let tr_email = tr.find("td:nth-child(4)").text();
        let tr_age = tr.find("td:nth-child(6)").text();
        let tr_gender = tr.find("td:nth-child(5)").text();
        let tr_city = tr.find("td:nth-child(7)").text();
        let tr_country_of_graduation = tr.find("td:nth-child(8)").text();
        let tr_specialization = tr.find("td:nth-child(9)").text();
        let tr_specialization_desc = JSON.parse(tr.find("td:nth-child(10)").text());
        let tr_years_of_experience = tr.find("td:nth-child(11)").text();
        let tr_appointments = JSON.parse(tr.find("td:nth-child(12)").text());
        let tr_description = tr.find("td:nth-child(13)").text();

        let tr_imageSrc = tr.find("td:nth-child(2)")[0].childNodes[0].currentSrc


        let modal = $("#userEditModal");
        modal.find('#name').val(tr_name);
        modal.find('#email').val(tr_email);
        modal.find('#age').val(tr_age);
        let g;
        if (tr_gender == 'Male') {
            g = 'm';
        } else {
            g = 'f';
        }
        for (let i = 0; i < modal.find('#appointments input').length; i++) {
            for (let j = 0; j < tr_appointments.length; j++) {
                if(modal.find('#appointments input')[i].value === tr_appointments[j]){
                    modal.find('#appointments input')[i].checked = "checked"
                }
            }
        }
        modal.find('#gender').val(g);

        modal.find('#city').val(tr_city);
        modal.find('#country_of_graduation').val(tr_country_of_graduation);
        modal.find('#specialization').val(tr_specialization);
        modal.find('#specialization_desc_one').val(tr_specialization_desc[0]);
        modal.find('#specialization_desc_two').val(tr_specialization_desc[1]);
        modal.find('#specialization_desc_three').val(tr_specialization_desc[2]);
        modal.find('#years_of_experience').val(tr_years_of_experience);
        modal.find('#description').val(tr_description);

        modal.find('#setImage')[0].style.backgroundImage = "url(\"" + tr_imageSrc + "\")";
        modal.find('#form')[0].action = "admins\/" + tr_id;

        modal.modal("show")

    })

    @if($errors->has('*'))
    let modal = $("#userEditModal").show();

    modal.modal("show")
    @endif
</script>
@endpush
