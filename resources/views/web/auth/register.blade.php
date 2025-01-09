<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Sign Up</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />

    <link rel="stylesheet" href="{{ asset('assets/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/css/LineIcons.3.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/css/main.css') }}" />
</head>

<body>

    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>



    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Sign Up</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="#"><i class="lni lni-home"></i> Home</a></li>
                        <li>Sign Up</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="account-login section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
          <div class="register-form">
            <div class="title">
              <h3>Create account</h3>
              <p>Please enter the following data so you can create a new account
                and start your medical journey with us today!</p>
            </div>
            <form class="row" action="{{ route('register') }}" method="post">
                @csrf
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-fn">Full Name</label>
                  <input  class=" form-control @error('name')  is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" required>
                  @error('name')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-email">E-mail Address</label>
                  <input class="form-control @error('email')  is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required>
                  @error('email')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-phone">Phone Number</label>
                  <input class="form-control @error('mobile')  is-invalid @enderror" type="text" name="mobile" value="{{ old('mobile') }}">
                  @error('mobile')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-phone">Date of birth</label>
                  <input class="form-control @error('birthday')  is-invalid @enderror"  onfocus="(this.type = 'date')" type="text" name="birthday" value="{{ old('birthday') }}">
                  @error('birthday')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-pass">Address</label>
                  <input class="form-control @error('address')  is-invalid @enderror" type="text" name="address" value="{{ old('address') }}">
                  @error('address')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
               <div class="button">
                <button class="btn" type="submit">Register</button>
              </div>
              <p class="outer-link">Already have an account? <a href="{{ route('login') }}">Sign In</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div> --}}



    <div class="account-login section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                    <div class="register-form">
                        <!-- Toggle Buttons -->
                        <div class="form-toggle">
                            <button type="button" id="btn-patient" class="btn btn-primary">Patient</button>
                            <button type="button" id="btn-doctor" class="btn btn-secondary">Doctor</button>
                        </div>
                        <br>
                        <!-- Patient Registration Form -->
                        <div id="form-patient" style="display: block;">
                            <h4 class="mb-5">Patient Registration</h4>
                            <form class="row" action="{{ route('register') }}"
                                style="padding: 42px; border: 1px solid #e6e6e6; border-radius: 4px; background-color: #fff; -webkit-box-shadow: 0px 5px 40px #00000008; box-shadow: 0px 5px 40px #00000008;"
                                class="account-login login-form" method="post" enctype="multipart/form-data">
                                @csrf
                                <!-- Full Name -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="patient-name"> Full Name</label>
                                        <input class="form-control @error('name') is-invalid @enderror" type="text"
                                            name="name" value="{{ old('name') }}" required>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="patient-email">Email</label>
                                        <input class="form-control @error('email') is-invalid @enderror" type="email"
                                            name="email" value="{{ old('email') }}" required>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="patient-password"> Password</label>
                                        <input class="form-control @error('password') is-invalid @enderror"
                                            type="password" name="password" required>
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- National ID -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="patient-national-id"> National ID</label>
                                        <input class="form-control @error('national_id') is-invalid @enderror"
                                            type="text" name="national_id" value="{{ old('national_id') }}"
                                            required>
                                        @error('national_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Gender -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="patient-gender"> Gender</label>
                                        <select class="form-control @error('gender') is-invalid @enderror"
                                            name="gender" required>
                                            <option value="" disabled selected> (Select Gender)</option>
                                            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>
                                                (Male)</option>
                                            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>
                                                (Female)</option>
                                        </select>
                                        @error('gender')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Phone Number -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="patient-phone"> Phone Number</label>
                                        <input class="form-control @error('phone_number') is-invalid @enderror"
                                            type="text" name="phone_number" value="{{ old('phone_number') }}">
                                        @error('phone_number')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Address -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="patient-address"> Address</label>
                                        <input class="form-control @error('address') is-invalid @enderror"
                                            type="text" name="address" value="{{ old('address') }}">
                                        @error('address')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Identity Image -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="patient-identity-image"> Identity Image</label>
                                        <input class="form-control @error('identity_image') is-invalid @enderror"
                                            type="file" name="identity_image" accept="image/*">
                                        @error('identity_image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-sm-6">
                                    <div class="button">
                                        <button class="btn" type="submit">Register as Patient</button>

                                    </div>

                                </div>
                                <div class="col-sm-6">
                                    <p class="outer-link">You have an account? <a href="{{ route('login') }}">Login
                                            here </a>

                                </div>

                            </form>
                        </div>








                        <div id="form-doctor" style="display: none;">
                            <h4 class="mb-5">Doctor Registration</h4>
                            <form class="row" action="{{ route('admin.register') }}" method="post"
                                style="padding: 42px; border: 1px solid #e6e6e6; border-radius: 4px; background-color: #fff; -webkit-box-shadow: 0px 5px 40px #00000008; box-shadow: 0px 5px 40px #00000008;"
                                enctype="multipart/form-data">
                                @csrf
                                <!-- Name -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="doctor-name">Name</label>
                                        <input class="form-control @error('name') is-invalid @enderror" type="text"
                                            name="name" value="{{ old('name') }}" required>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="doctor-email">Email</label>
                                        <input class="form-control @error('email') is-invalid @enderror"
                                            type="email" name="email" value="{{ old('email') }}" required>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="doctor-password">Password</label>
                                        <input class="form-control @error('password') is-invalid @enderror"
                                            type="password" name="password" required>
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Specialty -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="doctor-specialty">Specialty</label>
                                        <input class="form-control @error('specialty') is-invalid @enderror"
                                            type="text" name="specialty" value="{{ old('specialty') }}" required>
                                        @error('specialty')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Phone Number -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="doctor-phone">Phone Number</label>
                                        <input class="form-control @error('phone_number') is-invalid @enderror"
                                            type="text" name="phone_number" value="{{ old('phone_number') }}">
                                        @error('phone_number')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Address -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="doctor-address">Address</label>
                                        <input class="form-control @error('address') is-invalid @enderror"
                                            type="text" name="address" value="{{ old('address') }}">
                                        @error('address')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-sm-6">
                                    <div class="button">
                                        <button class="btn" type="submit">Register as Doctor</button>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <p class="outer-link">You have an account? <a href="{{ route('login') }}">Login
                                            here </a>

                                </div>
                            </form>
                        </div>
















                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('btn-patient').addEventListener('click', function() {
            document.getElementById('form-patient').style.display = 'block';
            document.getElementById('form-doctor').style.display = 'none';
        });

        document.getElementById('btn-doctor').addEventListener('click', function() {
            document.getElementById('form-patient').style.display = 'none';
            document.getElementById('form-doctor').style.display = 'block';
        });
    </script>







    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <script src="{{ asset('assets/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/assets/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/assets/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/assets/js/main.js') }}"></script>
</body>

</html>




















{{-- <div class="form">
            <h3>Create account</h3>
            <p class="p">Please enter the following data so you can create a new account
                and start your medical journey with us today!</p>
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="input">
                    <div>
                        <label for="">Full name</label>
                        <input class="@error('name')  is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" required>
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="">Email</label>
                        <input class="@error('email')  is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for=""> Phone number</label>
                        <input class="@error('mobile')  is-invalid @enderror" type="text" name="mobile" value="{{ old('mobile') }}">
                        @error('mobile')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="">Date of birth</label>
                        <input class="@error('birthday')  is-invalid @enderror"  onfocus="(this.type = 'date')" type="text" name="birthday" value="{{ old('birthday') }}">
                        @error('birthday')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="">Password</label>
                        <input class="@error('password')  is-invalid @enderror" type="password" name="password" required>
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="">Confirm Password</label>
                            <input class="@error('password_confirmation')  is-invalid @enderror" type="password" value="{{ old('password_confirmation') }}" name="password_confirmation"/>
                            @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                    </div>
                    <div>
                        <label for="">Address</label>
                        <input class="@error('address')  is-invalid @enderror" type="text" name="address" value="{{ old('address') }}">
                        @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

 
                <input type="submit">
                <p class="pr">Already Register ? <a href="{{ route('login') }}">Sign In</a></p>
            </form>
        </div> --}}
