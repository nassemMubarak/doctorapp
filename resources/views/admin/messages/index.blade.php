@extends('admin.layouts.layout')

@section('content')
<div>
    <!--begin::Card-->
    <div class="card card-custom gutter-b">
        <div class="card-header flex-wrap border-0">
            <div class="card-title">
                <h3 class="card-label">All Appointments
                </h3>
            </div>
            <div class="card-toolbar">
                <!--begin::Button-->
{{--                <button type="button" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#userAddModal">--}}
{{--                    <span class="svg-icon svg-icon-md">--}}
{{--                        --}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
{{--                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--                                <rect x="0" y="0" width="24" height="24" />--}}
{{--                                <circle fill="#000000" cx="9" cy="15" r="6" />--}}
{{--                                <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />--}}
{{--                            </g>--}}
{{--                        </svg>--}}
{{--                       --}}
{{--                    </span>Add Message--}}
{{--                </button>--}}

{{--                <!--end::Button-->--}}
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
                                    <label class="col-lg-1 col-form-label">Phone Number</label>
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
            <table class="table-bordered" id="table_id">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Patient</th>
                        <th>Doctor</th>
                        <th>Message</th>
                        <th>Replay</th>
                        <th>File</th>
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

{{--<div class="modal fade" id="userAddModal" tabindex="-1" role="dialog" aria-labelledby="userAddModal" aria-hidden="true">--}}
{{--    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">--}}
{{--        <div class="modal-content modal-dialog">--}}
{{--            <form class="form" action="{{ route('admin.appointments.store') }}" method="post" enctype="multipart/form-data">--}}
{{--                @csrf--}}
{{--                <div class="modal-header">--}}
{{--                    <h5 class="modal-title" id="exampleModalLongTitle">Add Appointment</h5>--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    <div class="form-group row ">--}}
{{--                        <label class="col-form-label col-lg-3">{{ __('Patient') }}</label>--}}
{{--                        <div class="col-lg-9">--}}
{{--                            <select name="user_id" class="form-control form-control-solid">--}}
{{--                                @foreach($users as $user)--}}
{{--                                <option value="{{$user->id}}" name="patient">{{$user->name}}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="form-group row ">--}}
{{--                        <label class="col-form-label col-lg-3">{{ __('Date') }}</label>--}}
{{--                        <div class="col-lg-9">--}}
{{--                            <input type="date" class="form-control form-control-solid @error('date')  is-invalid @enderror" name="date" value="{{ old('date') }}" placeholder="date..." />--}}
{{--                            @error('date')--}}
{{--                            <div class="invalid-feedback">{{ $message }}</div>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="form-group row ">--}}
{{--                        <label class="col-form-label col-lg-3">{{ __('Time') }}</label>--}}
{{--                        <div class="col-lg-9">--}}
{{--                            <select name="time" class="form-control form-control-solid">--}}
{{--                                <option value="9-10" name="gender">9:00 - 10:00 am</option>--}}
{{--                                <option value="10-11" name="gender">10:00 - 11:00 am</option>--}}
{{--                                <option value="11-12" name="gender">11:00 - 12:00 am</option>--}}
{{--                                <option value="12-1" name="gender">12:00 - 1:00 pm</option>--}}
{{--                                <option value="1-2" name="gender">1:00 - 2:00 pm</option>--}}
{{--                                <option value="2-3" name="gender">2:00 - 3:00 pm</option>--}}
{{--                                <option value="3-4" name="gender">3:00 - 4:00 pm</option>--}}
{{--                                <option value="4-5" name="gender">4:00 - 5:00 pm</option>--}}
{{--                                <option value="5-6" name="gender">5:00 - 6:00 pm</option>--}}
{{--                                <option value="6-7" name="gender">6:00 - 7:00 pm</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="form-group row ">--}}
{{--                        <label class="col-form-label col-lg-3">{{ __('Message') }}</label>--}}
{{--                        <div class="col-lg-9">--}}
{{--                            <textarea type="text" class="form-control form-control-solid @error('message')  is-invalid @enderror" name="message" value="{{ old('message') }}" placeholder="write description..."></textarea>--}}
{{--                            @error('message')--}}
{{--                            <div class="invalid-feedback">{{ $message }}</div>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    --}}

{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <button type="submit" class="btn btn-primary" id="AddUser">Add</button>--}}
{{--                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{-- End Add Modal   --}}

<!-- Edit Modal -->
<div class="modal fade" id="userEditModal" tabindex="-1" role="dialog" aria-labelledby="userEditModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content modal-dialog">
            <form id="form" class="form" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Replay to Patient</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <input type="hidden" id="id" name="id" value=""/>
                <div class="modal-body">
                    <div class="form-group row ">
                        <label class="col-form-label col-lg-3">{{ __('Replay') }}</label>
                        <div class="col-lg-9">
                            <textarea type="text" id="replay" class="form-control form-control-solid @error('replay')  is-invalid @enderror" name="replay" placeholder="write your replay..."></textarea>
                            @error('replay')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-form-label col-lg-3">{{ __('File') }}</label>
                        <div class="col-lg-9">
                            <input  type="file" class="form-control form-control-solid @error('file')  is-invalid @enderror" name="file" value="{{ old('file') }}" >
                            @error('file')
                            <div class="invalid-feedback">{{ $file }}</div>
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
                url: "{{ route('admin.messages.index') }}",
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
                    data: 'patient',
                    name: 'patient',
                },
                {
                    data: 'doctor',
                    name: 'doctor',
                },
                {
                    data: 'message',
                    name: 'message',
                },
                {
                    data: 'replay',
                    name: 'replay',
                },
                {
                    data: 'file_path',
                    name: 'file_path',
                },
                {
                    data: 'actions',
                    name: 'actions',
                },
            ],
            columnDefs: [{
                className: 'text-center',
                targets: [0, 1, 2, 3, 4, 5]
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
        let tr_replay = tr.find("td:nth-child(5)").text();


        let modal = $("#userEditModal");

        modal.find('#replay').val(tr_replay);
        modal.find('#id').val(tr_id);

        modal.find('#form')[0].action = "messages\/" + tr_id;

        modal.modal("show")

    })
</script>
@endpush
