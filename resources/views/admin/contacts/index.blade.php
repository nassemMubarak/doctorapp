@extends('admin.layouts.layout')

@section('content')
<div>
    <!--begin::Card-->
    <div class="card card-custom gutter-b">
        <div class="card-header flex-wrap border-0">
            <div class="card-title">
                <h3 class="card-label">All Contacts Messages
                </h3>
            </div>
            <div class="card-toolbar">
                <!--begin::Button-->
                <!-- <button type="button" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#userAddModal">
                    <span class="svg-icon svg-icon-md">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <circle fill="#000000" cx="9" cy="15" r="6" />
                                <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                            </g>
                        </svg>
                      
                    </span>Add News
                </button> -->

                <!--end::Button-->
            </div>
        </div>
        <div class="container border-0 pt-6 pb-0" style="background-color: transparent; min-height: 70px">

            <!--begin::Card-->
            <!-- <div class="gutter-b example example-compact">
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
            </div> -->
            <!--end::Card-->
        </div>
        <div class="card-body pt-0 mt-0">
            <!--begin: Datatable-->
            <table class="table-bordered" id="table_id">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Patient</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Sended At</th>
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
                url: "{{ route('admin.contacts.index') }}",
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
                    data: 'subject',
                    name: 'subject',
                },
                {
                    data: 'message',
                    name: 'message',
                },
                {
                    data: 'date',
                    name: 'date',
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

</script>
@endpush