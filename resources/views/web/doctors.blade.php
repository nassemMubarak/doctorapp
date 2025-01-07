@include('web.headersection')
{{-- <div class="landing">
    <h1>Doctor</h1>
    <div></div>
</div>
<div class="landing-text">
    <div class="container">
        <div class="text">
            <h2>Choose for Doctor , Make an Appointment</h2>
            <p>Discover the best doctors, clinic, hospitals, nearest cities that suits your calender</p>
        </div>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="form">
            <div class="search">
                <label for="sch">Search</label>
                <div class="ser">
                    <input type="text" id="sch" placeholder="Search doctor" onkeyup="search()">
                </div>
            </div>
            <div class="country">
                <p>Country</p>
                <div class="drop">
                    <div>
                        <input type="text" class="text-box" placeholder="Select Country" readonly>
                        <i class="fa-solid fa-chevron-up i"></i>
                    </div>
                    <div class="option">
                        <div>Gaza</div>
                        <div>Alnsirat</div>
                        <div>Alborij</div>
                    </div>
                </div>
            </div>
            <div class="district">
                <p>Dictrict or State</p>
                <div class="dropp">
                    <div>
                        <input type="text" class="text-box" placeholder="Select district or state" readonly>
                        <i class="fa-solid fa-chevron-up i"></i>
                    </div>
                    <div class="optionn">
                        <div>Gaza</div>
                        <div>Alnsirat</div>
                        <div>Alborij</div>
                    </div>
                </div>
            </div>
            <div class="gender">
                <p>Gender of doctor</p>
                <div class="backup-control">
                    <div class="date">
                        <input id="male" name="gender" type="radio" checked>
                        <label class="male" for="male">Male</label>
                    </div>
                    <div class="date">
                        <input id="female" name="gender" type="radio">
                        <label class="female" for="female">Female</label>
                    </div>
                </div>
            </div>
            <div class="speciality">
                <p>Speciality</p>
                <div class="sp-drop">
                    <div class="in">
                        <input type="text" placeholder="Search specialities" readonly>
                        <i class="fa-solid fa-chevron-up i"></i>
                    </div>
                    <div class="sp-option">
                        <div class="control">
                            <input type="checkbox" id="one" checked>
                            <label for="one">Neurologist</label>
                        </div>
                        <div class="control">
                            <input type="checkbox" id="two" >
                            <label for="two">Surgeon</label>
                        </div>
                        <div class="control">
                            <input type="checkbox" id="three" checked>
                            <label for="three">Orthopaedics</label>
                        </div>
                        <div class="control">
                            <input type="checkbox" id="four" >
                            <label for="four">Internal Medicine</label>
                        </div>
                        <div class="control">
                            <input type="checkbox" id="five" checked>
                            <label for="five">Famili medicine</label>
                        </div>
                        <div class="control">
                            <input type="checkbox" id="six">
                            <label for="six">Opthalmologist</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="doctor-content">
            <div class="doctor">
                @foreach($doctors as $doctor)
                    <a href="{{ route('doctors.show', $doctor->id) }}">
                <div class="box" id="1">
                        <div class="gender-2">male</div>
                        <div>
                            <i class="fa-solid fa-star"></i>
                            <span>{{ $doctor->years_of_experience }}</span>
                        </div>
                        <img src="{{ $doctor->image_path }}" alt="image">
                        <p class="doctor-name">Dr. {{ $doctor->name }}</p>
                        <p>Dentician</p>
                        <span>120 Reviews</span>
                </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div> --}}
<!-- start footer -->




    <!--====== PAGE BANNER PART START ======-->

    <section class="page-banner bg_cover" style="background-image: url(assets/images/page-banner-4.jpg)" data-overlay="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-content text-center">
                        <h2 class="page-title">Our Doctors</h2>
                        <ul>
                            <li><a href="{{ route('index')}}">Home</a></li>
                            <li><a href="#">Doctors</a></li>
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
                            <img src="assets/images/team/doctor-head.jpg" alt="doctor head">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="doctors-content mt-25">
                            <h3 class="doctors-name">Dr. Dennis Williams</h3>
                            <span class="sub-title">Head of the clinic</span>
                            <p class="text">As President and Chief Executive Officer of clinic, Dennis Williams leads the nation’s foremost independent health clinic and research. He has been a driving force to improve the effectiveness and efficacy of the care provided at clinic while at the same time reducing the costs of care. <br> <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Consectetur adipis icing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.</p>
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
                                    <img style="max-height: 200px" src="{{ $doctor->image_path }}" alt="Team">
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
 










@include('web.footersection')
