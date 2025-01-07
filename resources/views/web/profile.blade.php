<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/profile.css') }}">
    <link rel="website icon" type="png" href="{{ asset('assets/web/assets/images/logo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&family=Work+Sans:wght@400;500&family=Yeseva+One&display=swap"
        rel="stylesheet">
    <title>Home</title>
</head>
<body>
    <div class="overlay"></div>
    <div class="model-box" >
        <h2>change password</h2>
        <i class="fa-solid fa-x close"></i>
        <form action="{{ route('profile.password.update') }}" method="post">
            @csrf
            <div>
                <label for="old">Old Psaaword:</label>
                <input type="password" placeholder="Old psaaword" name="current_password" class="@error('current_password')  is-invalid @enderror">
                @error('current_password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="new">New Psaaword:</label>
                <input type="password" placeholder="New psaaword" name="password" class="@error('password')  is-invalid @enderror">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="copv">Password Confirmation:</label>
                <input type="password" placeholder="Password confirmation" name="password_confirmation" class="@error('password_confirmation')  is-invalid @enderror">
                @error('password_confirmation')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type = "submit">Change</button>
        </form>
</div>
<!-- start header -->
@include('web.header')
<!-- end header -->
<div class="profile">
    <div class="container">
        <h1>Profile</h1>
        <div class="left">
            <div class="profile-page">
                <form action="{{ route('profile.update', $user) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="overview">
                        <div class="avatar-box">
                            <div class="dropzone">
                                <img src="{{ $user->image_path }}" class="upload-icon">
                                <input type="file" class="upload-input" name="image" hidden id="image">
                                <label for="image"><i class="fa-solid fa-cloud-arrow-up"></i></label>
                            </div>
                            <h3>{{ $user->name }}</h3>
                            <input type="submit" value="Update">
                        </div>
                        <div class="info-box">
                            <div class="upchange">
                                <h4 class="c-grey">General Information</h4>
                                <button class = "change-pass">Change Password</button>
                            </div>
                            <div class="box">
                                <div class="fs">
                                    <span class="c-grey">Full Name:</span>
                                    <input style="width: 100%; " type="text" name="name" value="{{ $user->name }}" required>
                                </div>
                                <div class="fs">
                                    <span class="c-grey">Phone:</span>
                                    <input style="width: 100%; " type="text" name="mobile" value="{{ $user->mobile }}" required>
                                </div>
                                <div class="fs">
                                    <span class="c-grey">Birthday:</span>
                                    <input style="width: 100%; " type="text" placeholder="4/6/2000" onfocus="(this.type ='date')"
                                           onblur="this.type = 'text'" name="birthday" value="{{ $user->birthday }}">
                                </div>
                            </div>
                            <div class="box">
                                <div class="fs">
                                    <span class="c-grey">Gender:</span>
                                    <select name="gender" required class="c-grey" style="width: 100%; height: 37.7px; margin-top: 5px; border-radius: 5px; color: ; display:block; border: 1px solid #7777775e;">
                                        <option value="m" @if($user->gender == 'm') selected @endif>Male</option>
                                        <option value="f" @if($user->gender == 'f') selected @endif>Female</option>
                                    </select>
                                </div>
                                <div class="fs">
                                    <span class="c-grey">Email:</span>
                                    <input type="email" name="email" value="{{ $user->email }}"style="width: 100%; " readonly>
                                </div>
                                <div class="fs">
                                    <span class="c-grey">Diseases:</span>
                                    <div class="sp-drop">
                                        <div class="in">
                                            <input type="text" placeholder="select your diseases" readonly style="width: 100%;">
                                            <i class="fa-solid fa-chevron-up i"></i>
                                        </div>
                                        <div class="sp-option hide">
                                            <div class="control">
                                                <input type="checkbox" id="one"  name="diseases[]" value="nose_and_throttle" @if(in_array("nose_and_throttle", Json_decode($user->diseases))) checked @endif />
                                                <label for="one">Nose and throat</label>
                                            </div>
                                            <div class="control">
                                                <input type="checkbox" id="two" name="diseases[]" value="heart_and_blood_circulation" @if(in_array("heart_and_blood_circulation", Json_decode($user->diseases))) checked @endif />
                                                <label for="two">Heart and blood circulation</label>
                                            </div>
                                            <div class="control">
                                                <input type="checkbox" id="three" name="diseases[]" value="bones" @if(in_array("bones", Json_decode($user->diseases))) checked @endif />
                                                <label for="three">Bones</label>
                                            </div>
                                            <div class="control">
                                                <input type="checkbox" id="four" name="diseases[]" value="blood_diseases" @if(in_array("blood_diseases", Json_decode($user->diseases))) checked @endif />
                                                <label for="four">Blood diseases</label>
                                            </div>
                                            <div class="control">
                                                <input type="checkbox" id="five" name="diseases[]" value="chronic_diseases" @if(in_array("chronic_diseases", Json_decode($user->diseases))) checked @endif />
                                                <label for="five">Chronic diseases</label>
                                            </div>
                                            <div class="control">
                                                <input type="checkbox" id="six" name="diseases[]" value="other" @if(in_array("other", Json_decode($user->diseases))) checked @endif />
                                                <label for="six">Other</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="right">
            <!-- start project table  -->
            <div class="projects">
                <h2>Booked appointments</h2>
                <div class="responsive-table">
                    <table>
                        <thead>
                        <tr>
                            <th>Doctor</th>
                            <th>Department</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Message</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($appointments as $app)
                            <tr>
                                <td>{{ $app->doctor->name }}</td>
                                <td>{{ $app->doctor->specialization }}</td>
                                <td>{{ $app->date }}</td>
                                <td>{{ $app->time }}</td>
                                <td>{{ $app->message }}</td>
                                <td>
                                    <form action="{{ route('appointments.destroy', $app->id) }}" method="post"
                                          class="delete">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="projects">
                <h2>Free medical advice</h2>
                <div class="responsive-table">
                    <table>
                        <thead>
                        <tr>
                            <th>Doctor</th>
                            <th>Date Send</th>
                            <th>Time Send</th>
                            <th>Message</th>
                            <th>Dr.message</th>
                            <th>Prescription</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($messages as $message)
                            <tr>
                                <td>{{ $message->doctor->name }}</td>
                                <td>{{ \Illuminate\Support\Carbon::createFromFormat('Y-m-d H:i:s', $message->created_at)->format('l d, F Y') }}</td>
                                <td>{{ \Illuminate\Support\Carbon::createFromFormat('Y-m-d H:i:s', $message->created_at)->format('h:i A') }}</td>
                                <td>{{ $message->message }}</td>
                                <td>{{ $message->replay }}</td>
                                <td>@if($message->doctor_prescription != null)<a href="{{ $message->doctor_file_path }}" download>download</a>@endif</td>
                                <td>
                                    <form action="{{ route('messages.destroy', $message->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end header -->
@include('web.footer')
<!-- end header -->
<script src="{{ asset('assets/web/assets/js/register.js') }}"></script>
@include('web.toastr')
</body>
</html>
