{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/header.css') }}'">
    <link rel="website icon" type="png" href="{{ asset('assets/web/assets/images/logo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&family=Work+Sans:wght@400;500&family=Yeseva+One&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/login.css') }}">
    <title>Login</title>
</head>

<body>
    <div class="login l">
        <div class="content">
            <div class="image">
                <img src="{{ asset('assets/web/assets/images/login-user.png') }}" alt="">
                <div class="text">
                    <p>"it’s important to take care <br>
                        of your <span>health</span> even if you seem healthy."</p>
                </div>
            </div>
            <div class="form">
                <h3>Sign In</h3>
                <p class="p">Please enter the following data so you can login to your account and start your
                    medical journey with us today!</p>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="input">
                        <div>
                            <label for="email">Email</label>
                            <input class="@error('email')  is-invalid @enderror" type="email" name="email"
                                value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="password">Password</label>
                            <input class="@error('password')  is-invalid @enderror" type="password" name="password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>
                        <input type="submit" name="submit" value="Login">
                        <p class="pr">Don't have an account ? <a href="{{ route('register') }}">Register here</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html> --}}








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





                    {{-- <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="input">
                            <div>
                                <label for="email">Email</label>
                                <input class="@error('email')  is-invalid @enderror" type="email" name="email"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <label for="password">Password</label>
                                <input class="@error('password')  is-invalid @enderror" type="password" name="password">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                            </div>
                            <input type="submit" name="submit" value="Login">
                            <p class="pr">Don't have an account ? <a href="{{ route('register') }}">Register here</a>
                            </p>
                        </div>
                    </form> --}}


                    <form class="card login-form"  action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="title">
                                <h3>Sign In</h3>
                                <p>Please enter the following data so you can login to your account and start your medical journey with us today!                                    .</p>
                            </div>
                            
                            <div class="form-group input-group">
                                <label for="email">Email</label>
                                <input class="form-control" id="email"     class="@error('email')  is-invalid @enderror" type="email" name="email"
                                value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="form-group input-group">
                                <label for="password">Password</label>
                                <input class="form-control"  id="password"  class="@error('password')  is-invalid @enderror" type="password" name="password">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="d-flex flex-wrap justify-content-between bottom-content">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input width-auto" id="exampleCheck1">
                                    <label class="form-check-label">Remember me</label>
                                </div>
                                @if (Route::has('password.request'))
                                <a class="lost-pass" href="{{ route('password.request') }}" >Forgot password?</a>
                                @endif
                            </div>
                            <div class="button">
                                <button class="btn" type="submit">Login</button>
                            </div>
                            <p class="outer-link">Don't have an account? <a href="{{ route('register')}}">Register here </a>
                            </p>
                        </div>
                    </form>
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
