@include('web.headersection')

 {{-- <div class="about-content">
    <div class="container">
        <div class="left">
            <div class="doctor-img">
                <img src="{{ $doctor->image_path }}" class="img" alt="image doctor">
                <p>Doctor's Name</p>
                <h3>Dr. {{ $doctor->name }}</h3>
                <div class="icon">
                    <i class="fa-brands fa-linkedin-in"></i>
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
                <span>Doctor  Profile</span>
            </div>
            <div class="office">
                <div class="off">
                    <p>OFFICE</p>
                    <span>The Clinic</span>
                </div>
                <div class="image">
                    <img src="{{ $doctor->image_path }}" alt="">
                </div>
            </div>
        </div>
        <div class="right">
            <h2 class="doctor-name">Dr. {{ $doctor->name }}</h2>
            <p class="general-specialty">{{ $doctor->specialization }}</p>
            <div class="adress">
                <h3>{{ $doctor->city }}</h3>
                <p>The Graduation country  is {{ $doctor->country_of_graduation }}</p>
            </div>
            <div class="qualification">
                <h3>Specialization</h3>
                <p><span>Licecnces</span>: {{ $doctor->specialization }}</p>
            </div>
            <div class="specialities">
                <h3>Specialities</h3>
                <ul class="special">
                    <li>{{ json_decode($doctor->specialization_desc)[0] }}</li>
                    <li>{{ json_decode($doctor->specialization_desc)[1] }}</li>
                    <li>{{ json_decode($doctor->specialization_desc)[2] }}</li>
                </ul>
            </div>
            <div class="experience">
                <h3>Experience</h3>
                <p><span>Licecnces</span>: {{ $doctor->specialization }} <span>({{ $doctor->years_of_experience }} years of Experience)</span>
                </p>
            </div>
            <div class="about">
                <h3>About</h3>
                <p>{{ $doctor->description }}</p>
            </div>
        </div>
    </div>
</div> --}}
<!-- start footer -->





<section class="page-banner bg_cover" style="background-image: url(assets/images/page-banner-4.jpg)" data-overlay="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content text-center">
                    <h2 class="page-title">Dr. {{ $doctor->name }}  Details</h2>
                    <ul>
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li><a href="#">Dr. {{ $doctor->name }}  Details</a></li>
                    </ul>
                </div> <!-- page content -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== PAGE BANNER PART ENDS ======-->

<!--====== DOCTORS PAGE  PART START ======-->

<section class="doctors-page">
    <div class="container">
        <div class="doctors-head pt-100 pb-65">
            <div class="row">
                <div class="col-lg-5">
                    <div class="doctors-thumb mt-30">
                        <img src="{{ $doctor->image_path }}" alt="doctor head">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="doctors-content mt-25">
                        <h3 class="doctors-name"> {{ $doctor->name }}  </h3>
                        <span class="sub-title">{{ $doctor->specialization }}</span>
                        <p class="text">{{ $doctor->description }} .</p>
                        <a class="main-btn" href="#">Send a mail</a>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- doctors-head -->
        
        <div class="doctors-area pt-60 pb-130">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center pb-30">
                        <h5 class="sub-title">Team Members</h5>
                        <h3 class="title">Meet Our Specialists</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                @foreach($doctors as $doctor)

                <div class="col-lg-4 col-md-6">
                    <div class="single-team text-center mt-30">
                        <div class="team-image">
                            <img style="max-height: 200px; min-height: 200px"  src="{{ $doctor->image_path }}" alt="Team">
                        </div>
                        <div class="team-content">
                            <h5 class="team-name"><a href="{{ route('doctors.show', $doctor->id) }}">Dr. {{ $doctor->name }}</a></h5>
                            <span>Founder</span>
                            <ul class="social">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-instagram-original"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- single team -->
                </div>
            @endforeach
</div> <!-- row -->
        </div>
    </div> <!-- container -->
</section>

<!--====== DOCTOR PAGE  PART ENDS ======-->

<!--====== CALL TO ACTION PART START ======-->

<section class="call-action-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="call-action d-lg-flex justify-content-between align-items-center">
                    <div class="action-content">
                        <h3 class="action-title">Don’t hasitate to contact us!</h3>
                        <p class="text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem.</p>
                    </div> <!-- action content -->
                    <div class="action-btn">
                        <a class="main-btn" href="#">get appointment</a>
                    </div> <!-- action btn -->
                </div> <!-- call action -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>














@include('web.footersection')
<!-- end footer -->
