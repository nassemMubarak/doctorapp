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
                                <h4 class="card-title">Edit Category</h4>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="modal-body">
                                <form action="{{ route('admin.users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                            
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-3">{{ __('Name') }}</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control form-control-solid @error('name') is-invalid @enderror" 
                                                   name="name" value="{{ old('name', $user->name) }}" placeholder="Name..."/>
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                            
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-3">{{ __('Email') }}</label>
                                        <div class="col-lg-9">
                                            <input type="email" class="form-control form-control-solid @error('email') is-invalid @enderror"
                                                   name="email" value="{{ old('email', $user->email) }}" placeholder="Email..."/>
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                            
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-3">{{ __('Password') }}</label>
                                        <div class="col-lg-9">
                                            <input type="password" class="form-control form-control-solid @error('password') is-invalid @enderror" 
                                                   name="password" placeholder="Password"/>
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                            
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-3">{{ __('Confirm Password') }}</label>
                                        <div class="col-lg-9">
                                            <input type="password" class="form-control form-control-solid @error('password_confirmation') is-invalid @enderror"
                                                   name="password_confirmation" placeholder="Confirm password"/>
                                            @error('password_confirmation')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                            
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-3">{{ __('Gender') }}</label>
                                        <div class="col-lg-9">
                                            <select name="gender" class="form-control form-control-solid">
                                                <option value="male" {{ (old('gender', $user->gender) == 'male') ? 'selected' : '' }}>Male</option>
                                                <option value="female" {{ (old('gender', $user->gender) == 'female') ? 'selected' : '' }}>Female</option>
                                            </select>
                                        </div>
                                    </div>
                            
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-3">{{ __('National ID') }}</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control @error('national_id') is-invalid @enderror" 
                                                   name="national_id" value="{{ old('national_id', $user->national_id) }}" placeholder="National ID...">
                                            @error('national_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                            
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-3">{{ __('Phone Number') }}</label>
                                        <div class="col-lg-9">
                                            <input type="tel" class="form-control @error('phone_number') is-invalid @enderror" 
                                                   name="phone_number" value="{{ old('phone_number', $user->phone_number) }}" placeholder="Phone number...">
                                            @error('phone_number')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                            
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-3">{{ __('Address') }}</label>
                                        <div class="col-lg-9">
                                            <textarea class="form-control @error('address') is-invalid @enderror" 
                                                      name="address" placeholder="Address...">{{ old('address', $user->address) }}</textarea>
                                            @error('address')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                            
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-3">{{ __('Identity Image') }}</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-control @error('identity_image') is-invalid @enderror" 
                                                   name="identity_image" accept=".jpg, .jpeg, .png">
                                            @error('identity_image')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                            
                                    <div class="form-group row">
                                        <div class="col-lg-9 offset-lg-3">
                                            <button type="submit" class="btn btn-primary">{{ __('Update User') }}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
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
