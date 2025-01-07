<header>
    <div class="header">
        <div class="container">
            <a class="logo">
                <img src="{{ asset('assets/web/assets/images/logo.png') }}" alt="">
                <p>MED<span>ICAL</span></p>
            </a>
            <ul class="main-nav">
                <li><a href="{{ route('index') }}">home</a></li>
                <li><a href="{{ route('services') }}">services</a></li>
                <li><a href="{{ route('contacts.index') }}">contact</a></li>
                <li><a >other</a>
                    <!-- Start Megamenu -->
                    <div class="heding">
                        <div class="mega-menu" style="left: 0; width: 100%;">
                            <ul class="links">
                                <li>
                                    <a href="{{ route('appointments.index') }}"><i class="fa-regular fa-calendar-check"></i>Appointment </a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}"><i class="fa-regular fa-hospital"></i> About</a>
                                </li>
                                <li>
                                    <a href="{{ route('doctors.index') }}"><i class="fa-solid fa-user-doctor"></i> Doctor</a>
                                </li>
                                <li>
                                    <a href="{{ route('news.index') }}"><i class="fa-regular fa-newspaper"></i> News</a>
                                </li>
                                <li>
                                    <a href="{{ route('checkup') }}"><img src="{{ asset('assets/web/assets/images/Vector (1).png') }}" alt=""> Free Checkup</a>
                                </li>
                            </ul>
                            <ul class="links">
                                <li>
                                    <a href="{{ route('cardiogram') }}"><img src="{{ asset('assets/web/assets/images/Vector (2).png') }}" alt=""> Cardiogram </a>
                                </li>
                                <li>
                                    <a href="{{ route('DAN-testing') }}"><img src="{{ asset('assets/web/assets/images/Vector.png') }}" alt=""> DNA Testing</a>
                                </li>
                                <li>
                                    <a href="{{ route('blood-bank') }}"><img src="{{ asset('assets/web/assets/images/Vector (3).png') }}" alt=""> Blood Bank</a>
                                </li>
                                <li>
                                    <a href="{{ route('dermatology') }}"><img src="{{ asset('assets/web/assets/images/Vector.png') }}" alt=""> Dermalogy</a>
                                </li>
                                <li>
                                    <a href="{{ route('orthopedic') }}"><img src="{{ asset('assets/web/assets/images/Vector.png') }}" alt=""> Orthopedic</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a><i class="fa-solid fa-user" style="position: relative;"></i></a>
                    <div class="heding" style="position: relative;">
                        <div class="mega-menu" style="width: 200px; right:-80px; height: 150px;">
                            <ul class="links" style="min-width: 150px;">
                                <li>
                                    <a href="{{ route('profile') }}"><i class="fa-regular fa-address-card"></i>Profile</a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"><i class="fa-solid fa-arrow-right-from-bracket" style="color : red"></i>Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </li>
            </ul>
        </div>
    </div>
</header>
