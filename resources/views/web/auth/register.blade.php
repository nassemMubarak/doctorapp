<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Sign In.</title>
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
                        <h1 class="page-title">Sign In</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html"><i class="lni lni-home"></i> Home</a></li>
                        <li>Sign In</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="account-login section">
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
              <div class="col-sm-12">
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
              {{-- <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-pass">Password</label>
                  <input class="form-control @error('password')  is-invalid @enderror" type="password" name="password" required>
                  @error('password')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-pass-confirm">Confirm Password</label>
                  <input class="form-control @error('password_confirmation')  is-invalid @enderror" type="password" value="{{ old('password_confirmation') }}" name="password_confirmation"/>
                  @error('password_confirmation')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div> --}}
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
  </div>
  
  
  
  
  
  
  
  
  
  
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
