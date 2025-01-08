@extends('admin.layouts.layout')

@section('content')

    <div class="container">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="card-title">Edit Doctor</h4>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form" action="{{ route('admin.admins.update', $admin->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT') <!-- Method spoofing for PUT request -->
                                
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            
                              
                                <div class="modal-body">
                                    <!-- Name Field -->
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-3">{{ __('Name') }}</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control form-control-solid @error('name') is-invalid @enderror" name="name" value="{{ old('name', $admin->name) }}" placeholder="name..." />
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                            
                                    <!-- Email Field -->
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-3">{{ __('Email') }}</label>
                                        <div class="col-lg-9">
                                            <input type="email" class="form-control form-control-solid @error('email') is-invalid @enderror" name="email" value="{{ old('email', $admin->email) }}" placeholder="email..." />
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                            
                                    <!-- Password Field -->
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-3">{{ __('Password') }}</label>
                                        <div class="col-lg-9">
                                            <input type="password" class="form-control form-control-solid @error('password') is-invalid @enderror" name="password" placeholder="Password" />
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                            
                                    <!-- Confirm Password Field -->
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-3">{{ __('Confirm Password') }}</label>
                                        <div class="col-lg-9">
                                            <input type="password" class="form-control form-control-solid @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Confirm password" />
                                            @error('password_confirmation')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                            
                                    <!-- Specialty Field -->
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-3">{{ __('Specialty') }}</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control form-control-solid" name="specialty" value="{{ old('specialty', $admin->specialty) }}" placeholder="Specialty..." />
                                        </div>
                                    </div>
                            
                                    <!-- Phone Number Field -->
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-3">{{ __('Phone Number') }}</label>
                                        <div class="col-lg-9">
                                            <input type="tel" class="form-control form-control-solid" name="phone_number" value="{{ old('phone_number', $admin->phone_number) }}" placeholder="Phone Number..." />
                                        </div>
                                    </div>
                            
                                    <!-- Address Field -->
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-3">{{ __('Address') }}</label>
                                        <div class="col-lg-9">
                                            <textarea class="form-control form-control-solid" name="address" placeholder="Address...">{{ old('address', $admin->address) }}</textarea>
                                        </div>
                                    </div>
                            
                                </div>
                            
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" id="AddUser">Update</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                                                    </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">

                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </div>

@endsection

@push('script')
    let avatar1 = new KTImageInput('kt_image_1');
@endpush
