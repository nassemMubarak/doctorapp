@extends('admin.layouts.layout')

@section('content')
    <div>
        <!--begin::Card-->
        <div class="card card-custom gutter-b">
            <div class="card-header flex-wrap border-0">
                <div class="card-title">
                    <h3 class="card-label">All Users
                    </h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <button type="button" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#userAddModal">
                        <span class="svg-icon svg-icon-md">
                          <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24" /><circle fill="#000000" cx="9" cy="15" r="6" />
                              <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                            </g>
                          </svg>
                            <!--end::Svg Icon-->
                        </span>Add User
                    </button>

                    <!--end::Button-->
                </div>
            </div>
            <div class="container border-0 pt-6 pb-0" style="background-color: transparent; min-height: 70px">

                    <!--begin::Card-->
                    <div class="gutter-b example example-compact">
                        <div class="contentTable">
                            <button  type="button" class="btn btn-secondary btn--filter" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="icon-xl la la-sliders-h"></i>{{__('filter')}}</button>
                            <div class="collapse mt-5" id="collapseExample">
                                <div class="card border-0">
                                    <div class="card-body">
                                        <div class="form-group row mt-3">
                                            <label class="col-lg-1 col-form-label">Name</label>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" name="name" value="{{request('name')?request('name'):''}}"  placeholder="name..."/>
                                            </div>
                                            <label class="col-lg-1 col-form-label">Email</label>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" name="email" value="{{request('email')?request('email'):''}}"  placeholder="email..."/>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-3">
                                            <label class="col-lg-1 col-form-label">Phone Number</label>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" name="phone_number" value="{{request('phone_number')?request('phone_number'):''}}"  placeholder="phone number..."/>
                                            </div>
                                            <label class="col-lg-1 col-form-label">Address</label>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" name="address" value="{{request('address')?request('address'):''}}"  placeholder="address..."/>
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
                <table class="table-bordered table-responsive w-100" id="table_id">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>gender</th>
                        <th>status</th>
                        <th>birthday</th>
                        <th>diseases</th>
                        <th>Actions</th>
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
                <form class="form" action="{{ route('admin.users.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3">{{ __('Image') }}</label>
                            <div class="col-lg-9">
                                <div class="image-input image-input-outline" id="kt_image_1">
                                    <div class="image-input-wrapper" style="background-image: url({{asset('assets/admin/assets/media/users/blank.png')}}); width: 120px; height: 120px;">
                                    </div>
                                    <label
                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                        data-action="change" data-toggle="tooltip" title=""
                                        data-original-title="Add Image">
                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                        <input type="file" name="image" accept=".png, .jpg, .jpeg"/>
                                        <input type="hidden" name="image_remove"/>
                                    </label>

                                    <span
                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                        data-action="cancel" data-toggle="tooltip" title="Remove Image">
                                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label class="col-form-label col-lg-3">{{ __('Name') }}</label>
                            <div class="col-lg-9">
                                <input type="text"
                                       class="form-control form-control-solid @error('name')  is-invalid @enderror"
                                       name="name" value="{{ old('name') }}"
                                       placeholder="name..."/>
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label class="col-form-label col-lg-3">{{ __('Email') }}</label>
                            <div class="col-lg-9">
                                <input type="email"
                                       class="form-control form-control-solid @error('email')  is-invalid @enderror"
                                       name="email" value="{{ old('email') }}"
                                       placeholder="email..."/>
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label class="col-form-label col-lg-3">{{ __('Password') }}</label>
                            <div class="col-lg-9">
                                <input type="password"
                                       class="form-control form-control-solid @error('password')  is-invalid @enderror"
                                       name="password" value="{{ old('password') }}"
                                       placeholder="Password"/>
                                @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label class="col-form-label col-lg-3">{{ __('Confirm Password') }}</label>
                            <div class="col-lg-9">
                                <input type="password"
                                       class="form-control form-control-solid @error('password_confirmation')  is-invalid @enderror"
                                       name="password_confirmation" value="{{ old('password_confirmation') }}"
                                       placeholder="Confirm password"/>
                                @error('password_confirmation')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label class="col-form-label col-lg-3">{{ __('Mobile') }}</label>
                            <div class="col-lg-9">
                                <input type="tel"
                                       class="form-control form-control-solid @error('mobile')  is-invalid @enderror"
                                       name="mobile" value="{{ old('mobile') }}"
                                       placeholder="mobile..."/>
                                @error('mobile')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row ">
                                <label class="col-form-label col-lg-3">{{ __('Gender') }}</label>
                                <div class="col-lg-9">
                                    <select name="gender"
                                            class="form-control form-control-solid">
                                        <option value="m" name="gender">Male</option>
                                        <option value="f" name="gender">Female</option>
                                    </select>
                                </div>
                        </div>
                        <div class="form-group row ">
                                <label class="col-form-label col-lg-3">{{ __('Status') }}</label>
                                <div class="col-lg-9">
                                    <select name="status"
                                            class="form-control form-control-solid">
                                        <option value="sick" name="status">Sick</option>
                                        <option value="unsick" name="status">Unsick</option>
                                    </select>
                                </div>
                        </div>
                        <div class="form-group row ">
                            <label class="col-form-label col-lg-3">{{ __('Birthday') }}</label>
                            <div class="col-lg-9">
                                <input type="date"
                                       class="form-control form-control-solid @error('birthday')  is-invalid @enderror"
                                       name="birthday" value="{{ old('birthday') }}"
                                       placeholder="birthday..."/>
                                @error('birthday')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">{{ __('Diseases') }}</label>
                           <div class="col-9 col-form-label">
                                <div class="checkbox-inline">
                                    <label class="checkbox checkbox-outline checkbox-success">
                                        <input type="checkbox" name="diseases[]" value="nose_and_throttle"/>
                                        <span></span>
                                        Nose and throttle
                                    </label>
                                    <label class="checkbox checkbox-outline checkbox-success">
                                        <input type="checkbox" name="diseases[]" value="heart_and_blood_circulation"/>
                                        <span></span>
                                        Heart and blood circulation
                                    </label>
                                </div>
                                <div class="checkbox-inline">
                                    <label class="checkbox checkbox-outline checkbox-success">
                                        <input type="checkbox" name="diseases[]" value="blood_diseases"/>
                                        <span></span>
                                        Blood diseases
                                    </label>
                                    <label class="checkbox checkbox-outline checkbox-success">
                                        <input type="checkbox" name="diseases[]" value="bones"/>
                                        <span></span>
                                        Bones
                                    </label>
                                </div>
                                <div class="checkbox-inline">
                                <label class="checkbox checkbox-outline checkbox-success">
                                        <input type="checkbox" name="diseases[]" value="chronic_diseases"/>
                                        <span></span>
                                        Chronic diseases
                                    </label>
                                    <label class="checkbox checkbox-outline checkbox-success">
                                        <input type="checkbox" name="diseases[]" value="other"/>
                                        <span></span>
                                        Other
                                    </label>
                                </div>
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Show User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3">{{ __('Image') }}</label>
                        <div class="col-lg-9">
                            <div class="image-input image-input-outline" id="kt_image_2">
                                <div class="image-input-wrapper" id="setImage"
                                     style="background-image: url({{asset('assets/admin/assets/media/users/blank.png')}});
                                                            width: 120px;
                                                            height: 120px;"></div>
                                <label
                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                    data-action="change" data-toggle="tooltip" title=""
                                    data-original-title="Add Image">
                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                    <input type="file" name="image" accept=".png, .jpg, .jpeg"/>
                                    <input type="hidden" name="image_remove"/>
                                </label>

                                <span
                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                    data-action="cancel" data-toggle="tooltip" title="Remove Image">
                                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-form-label col-lg-3">{{ __('Name') }}</label>
                        <div class="col-lg-9">
                            <input type="text" id="name"
                                   class="form-control form-control-solid @error('name')  is-invalid @enderror"
                                   name="name" value="{{ old('name') }}"
                                   placeholder="name..." />
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-form-label col-lg-3">{{ __('Email') }}</label>
                        <div class="col-lg-9">
                            <input type="email" id="email"
                                   class="form-control form-control-solid @error('email')  is-invalid @enderror"
                                   name="email" value="{{ old('email') }}"
                                   placeholder="email..." />
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row ">
                            <label class="col-form-label col-lg-3">{{ __('Mobile') }}</label>
                            <div class="col-lg-9">
                                <input type="tel" id="mobile"
                                       class="form-control form-control-solid @error('mobile')  is-invalid @enderror"
                                       name="mobile" value="{{ old('mobile') }}"
                                       placeholder="mobile..."/>
                                @error('mobile')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row ">
                                <label class="col-form-label col-lg-3">{{ __('Gender') }}</label>
                                <div class="col-lg-9">
                                    <select name="gender" id="gender"
                                            class="form-control form-control-solid">
                                        <option value="m" name="gender">Male</option>
                                        <option value="f" name="gender">Female</option>
                                    </select>
                                </div>
                        </div>
                        <div class="form-group row ">
                                <label class="col-form-label col-lg-3">{{ __('Status') }}</label>
                                <div class="col-lg-9">
                                    <select name="status" id="status"
                                            class="form-control form-control-solid">
                                        <option value="sick" name="status">Sick</option>
                                        <option value="unsick" name="status">Unsick</option>
                                    </select>
                                </div>
                        </div>
                        <div class="form-group row ">
                            <label class="col-form-label col-lg-3">{{ __('Birthday') }}</label>
                            <div class="col-lg-9">
                                <input type="date" id="birthday"
                                       class="form-control form-control-solid @error('birthday')  is-invalid @enderror"
                                       name="birthday" value="{{ old('birthday') }}"
                                       placeholder="birthday..."/>
                                @error('birthday')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-3 col-form-label">{{ __('Diseases') }}</label>
                           <div class="col-9 col-form-label">
                                <div class="checkbox-inline" id="diseases">
                                    <label class="checkbox checkbox-outline checkbox-success">
                                        <input type="checkbox" name="diseases[]" value="nose_and_throttle"/>
                                        <span></span>
                                        Nose and throttle
                                    </label>
                                    <label class="checkbox checkbox-outline checkbox-success">
                                        <input type="checkbox" name="diseases[]" value="heart_and_blood_circulation"/>
                                        <span></span>
                                        Heart and blood circulation
                                    </label>

                                    <label class="checkbox checkbox-outline checkbox-success">
                                        <input type="checkbox" name="diseases[]" value="blood_diseases"/>
                                        <span></span>
                                        Blood diseases
                                    </label>
                                    <label class="checkbox checkbox-outline checkbox-success">
                                        <input type="checkbox" name="diseases[]" value="bones"/>
                                        <span></span>
                                        Bones
                                    </label>

                                    <label class="checkbox checkbox-outline checkbox-success">
                                        <input type="checkbox" name="diseases[]" value="chronic_diseases"/>
                                        <span></span>
                                        Chronic diseases
                                    </label>
                                    <label class="checkbox checkbox-outline checkbox-success">
                                        <input type="checkbox" name="diseases[]" value="other"/>
                                        <span></span>
                                        Other
                                    </label>
                                </div>
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
                    url:  "{{ route('admin.users.index') }}",
                    data: function (d) {
                        d.name = $('input[name="name"]').val()
                        d.description = $('input[name="description"]').val()
                    }

                },
                columns: [
                    {
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
                        data: 'mobile',
                        name: 'mobile',
                    },
                    {
                        data: 'gender',
                        name: 'gender',
                    },
                    {
                        data: 'status',
                        name: 'status',
                    },
                    {
                        data: 'birthday',
                        name: 'birthday',
                    },
                    {
                        data: 'diseases',
                        name: 'diseases',
                    },
                    {
                        data: 'actions',
                        name: 'actions',
                    },
                ],
                columnDefs: [
                    { className: 'text-center', targets: [0,1,2,3,4,5,6] },
                ],
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
            let tr_mobile = tr.find("td:nth-child(5)").text();
            let tr_birthday = tr.find("td:nth-child(8)").text();
            let tr_status = tr.find("td:nth-child(7)").text();
            let tr_gender = tr.find("td:nth-child(6)").text();
            let tr_diseases = JSON.parse(tr.find("td:nth-child(9)").text());
            let tr_imageSrc = tr.find("td:nth-child(2)")[0].childNodes[0].currentSrc


            let modal = $("#userEditModal");
            modal.find('#name').val(tr_name);
            modal.find('#email').val(tr_email);
            modal.find('#mobile').val(tr_mobile);
            modal.find('#birthday').val(tr_birthday);
            modal.find('#status').val(tr_status);
            let g ;
            if(tr_gender === 'Male'){
                g = 'm';
            }else{
                g = 'f';
            }
            modal.find('#gender').val(g);
            for (let i = 0; i < modal.find('#diseases input').length; i++) {
                for (let j = 0; j < tr_diseases.length; j++) {
                    if(modal.find('#diseases input')[i].value === tr_diseases[j]){
                        modal.find('#diseases input')[i].checked = "checked"
                    }
                }
            }


            // console.log(modal.find('#diseases input'));
            // modal.find('#diseases input')[0].checked = "checked";

            modal.find('#setImage')[0].style.backgroundImage = "url(\"" + tr_imageSrc + "\")";
            modal.find('#form')[0].action = "users\/" + tr_id ;

            modal.modal("show")

        })
    </script>
@endpush
