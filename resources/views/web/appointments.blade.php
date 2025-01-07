
@include('web.headersection')
{{-- <div class="landing">
    <h1>Book an Appointment</h1>
    <div></div>
</div>
<div class="appointments">
    <div class="container flex">
        <div class="appointment-form">
            <h2>Book an Appointment</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id, quas ullam voluptatibus asperiores
                autem fuga? Nesciunt perferendis amet eos? Quod voluptate, cupiditate voluptatibus nemo itaque
                voluptatem sunt ad rerum odio.</p>
            <form action="{{ route('appointments.store') }}" method="post">
                @csrf
                <input class="in" type="text" placeholder="Name" name="Name" maxlength="25" required value="{{ Auth::user()->name }}"readonly>
                <input class="in" type="email" name="email" placeholder="Email" required value="{{ Auth::user()->email }}" readonly>
                <input class="in input-date"  placeholder="Date" onfocus="(this.type='date')" type="text" required name="date" style="width: calc(100% - 2px);">
                <select name="doctor_id" id="doctors" class="a" required style="width: calc(100% - 2px);">
                    <option value="">choose doctor...</option>
                    @foreach($doctors as $doctor)
                    <option value="{{ $doctor->id }}">{{ $doctor->name . ' - '.$doctor->specialization }} </option>
                    @endforeach
                </select>
                <select name="time" id="time" class="a" required style="width: calc(100% - 2px); display: none">

                </select>
                <textarea name="message" id="" cols="30" rows="10" placeholder="Message"  maxlength="100"  required></textarea>
                <button type = "submit">Submit</button>
            </form>
        </div>
        <div class="Schedule">
            <h2>Schedule Hours</h2>
            <div class="time-dates">
                <div>Monday</div>
                <span>09:00 AM - 07:00 PM</span>
                <div>Tuesday</div>
                <span>09:00 AM - 07:00 PM</span>
                <div>Wednesday</div>
                <span>09:00 AM - 07:00 PM</span>
                <div>Thursday</div>
                <span>09:00 AM - 07:00 PM</span>
                <div>Friday</div>
                <span>09:00 AM - 07:00 PM</span>
                <div>Saturday</div>
                <span>09:00 AM - 07:00 PM</span>
                <div>Sunday</div>
                <span>09:00 AM - 07:00 PM</span>
            </div>
            <div class="emergency">
                <i class="ri-phone-line"></i>
                <div class="info">
                    <h4>EMERGENCY</h4>
                    <span>(+972) 432-678-123</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="map">
    <div class="container">
        <iframe src="https://www.google.com/maps/d/embed?mid=1B1lAsUpYFg82Je7XN1_cxRPf1UU&hl=en_US&ehbc=2E312F"
                width="640" height="480"></iframe>
    </div>
</div>
<div class="repeated-contact">
    <div class="container">
        <h3>get in touch</h3>
        <h2>contact</h2>
        <div class="info">
            <div class="box">
                <i class="ri-phone-line"></i>
                <h4>EMERGENCY</h4>
                <span>(+972) 432-678-123</span>
                <span>(+972) 432-678-123</span>
            </div>
            <div class="box">
                <i class="ri-map-pin-line"></i>
                <h4>LOCATION</h4>
                <p>Palestine - Gaza</p>
                <p>9876 Some country</p>
            </div>
            <div class="box">
                <i class="ri-mail-line"></i>
                <h4>EMAIL</h4>
                <span>Medicalcare@gmil.com</span>
                <span>myebstudios@gmail.com</span>
            </div>
            <div class="box">
                <i class="ri-time-line"></i>
                <h4>WORKING HOURS</h4>
                <span>Mon-Sat 09:00-20:00</span>
                <span>Sunday Emergency only</span>
            </div>
        </div>
    </div>
</div> --}}




    <!--====== PAGE BANNER PART START ======-->

    <section class="page-banner bg_cover" style="background-image: url(assets/images/page-banner-3.jpg)" data-overlay="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-content text-center">
                        <h2 class="page-title">Appointment</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="appointment.html">Appointment</a></li>
                        </ul>
                    </div> <!-- page content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== ABOUT PAGE PART START ======-->

    <section class="about-page about-two-page pt-80 pb-130">
        <div class="about-shape-left d-none d-lg-block">
            <img src="assets/images/shape-3.png" alt="shape">
        </div> <!-- about-shape -->

        <div class="container">
            <div class="about-page-content">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="about-image-tow mt-50">
                            <img src="assets/images/about-2.jpg" alt="About">
                            <a class="about-video video-popup" href="#"><i class="lni-play"></i></a>
                        </div> <!-- about image -->
                    </div>
                    <div class=" offset-xl-1 col-lg-6">
                        <div class="about-content-tow mt-45">
                            <div class="section-title mb-30">
                                <h3 class="title">Hospital doctors examine patients so that they diagnose</h3>
                            </div> <!-- section title -->
                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Consectetur adipis icing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor lorem vel nibh dictum, sit amet imperdiet dui sodales.</p>
                            <ul class="clearfix">
                                <li><i class="lni-check-mark-circle"></i> Experience Doctor</li>
                                <li><i class="lni-check-mark-circle"></i> Special Medicine</li>
                                <li><i class="lni-check-mark-circle"></i> Emmergency Treatment</li>
                                <li><i class="lni-check-mark-circle"></i> Security and Safety</li>
                            </ul>
                            <a class="main-btn" href="appointment.html">make appointment <i class="fa fa-angle-right"></i></a>
                        </div> <!-- about image -->
                    </div>
                </div> <!-- row -->
            </div> <!-- about-page-content -->
        </div> <!-- container -->

        <div class="about-shape-right d-none d-lg-block">
            <img src="assets/images/shape-4.png" alt="shape">
        </div> <!-- about-shape -->
    </section>

    <!--====== ABOUT PAGE PART ENDS ======-->

    <!--====== APPOINTMENT WORKING PART START ======-->

    <section class="appointment-working pt-80 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="appointment-area mt-45">
                        <div class="section-title section-title-two">
                            <h5 class="sub-title">Make an</h5>
                            <h3 class="title">Appointment</h3>
                        </div> <!-- section title -->
                        <div class="appointment-form mt-30">



                            {{-- <form action="{{ route('appointments.store') }}" method="post">
                                @csrf
                                <input class="in" type="text" placeholder="Name" name="Name" maxlength="25" required value="{{ Auth::user()->name }}"readonly>
                                <input class="in" type="email" name="email" placeholder="Email" required value="{{ Auth::user()->email }}" readonly>
                                <input class="in input-date"  placeholder="Date" onfocus="(this.type='date')" type="text" required name="date" style="width: calc(100% - 2px);">
                                <select name="doctor_id" id="doctors" class="a" required style="width: calc(100% - 2px);">
                                    <option value="">choose doctor...</option>
                                    @foreach($doctors as $doctor)
                                    <option value="{{ $doctor->id }}">{{ $doctor->name . ' - '.$doctor->specialization }} </option>
                                    @endforeach
                                </select>
                                <select name="time" id="time" class="a" required style="width: calc(100% - 2px); display: none">
                
                                </select>
                                <textarea name="message" id="" cols="30" rows="10" placeholder="Message"  maxlength="100"  required></textarea>
                                <button type = "submit">Submit</button>
                            </form> --}}

                            
                            <form action="{{ route('appointments.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single-appointment-form">
                                            <input type="text" name="Name" placeholder="Full Name" value="{{ Auth::user()->name }}"readonly>
                                            
                                        </div> <!-- single-appointment-form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-appointment-form">
                                            <input type="email" name="email" placeholder="Email" required value="{{ Auth::user()->email }}" readonly>
                                        </div> <!-- single-appointment-form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-appointment-form">
                                            <input id="datepicker" name="date" type="text" placeholder="MM/DD/YY">
                                        </div> <!-- single-appointment-form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-appointment-form">
                                            <select name="doctor_id" id="doctors">
                                                <option value="">choose doctor...</option>
                                                @foreach($doctors as $doctor)
                                                    <option value="{{ $doctor->id }}"> {{ $doctor->name . ' - '.$doctor->specialization }} </option>
                                                @endforeach
                                            </select>
                                        </div> <!-- single-appointment-form -->
                                    </div>

                                    <div class="col-md-6">
                                        {{-- <div class="single-contact-form form-group">
                                            <textarea name="message" id="" cols="30" rows="10" placeholder="Message"  maxlength="100"  required></textarea>
                                        </div> --}}

                                        <div class="single-appointment-form">
                                            <input type="text" name="message" placeholder="Message" >
                                        </div>
                                    </div>

                                    
                                    <div class="col-md-6">
                                        <div class="single-appointment-form">
                                            <button type="submit" class="main-btn main-btn-2">Submit Now</button>
                                        </div> <!-- single-appointment-form -->
                                    </div>
                                </div> <!-- row -->
                            </form>
                        </div> <!-- appointment form -->
                    </div> <!-- appointment area -->
                </div>
                <div class="col-lg-6">
                    <div class="working-area mt-45">
                        <div class="section-title section-title-two">
                            <h5 class="sub-title">DISCOVER</h5>
                            <h3 class="title">Working Time</h3>
                        </div> <!-- section title -->
                        <div class="working-content mt-20">
                            <div class="single-work-time d-sm-flex justify-content-between">
                                <p>Monday  <span class="time">09:00 AM - 07:00 PM</span></p>
  
                             </div> <!-- single work time -->
                            <div class="single-work-time d-sm-flex justify-content-between">
                                <p>Tuesday  <span class="time">09:00 AM - 07:00 PM</span></p>
                              </div> <!-- single work time -->
                              <div class="single-work-time d-sm-flex justify-content-between">
                                <p>Wednesday  <span class="time">09:00 AM - 07:00 PM</span></p>
  

                              </div> <!-- single work time -->

                              <div class="single-work-time d-sm-flex justify-content-between">
                                <p>Thursday  <span class="time">09:00 AM - 07:00 PM</span></p>

                              </div> <!-- single work time -->

                              <div class="single-work-time d-sm-flex justify-content-between">
                                <p>Saturday  <span class="time">09:00 AM - 07:00 PM</span></p>

                              </div> <!-- single work time -->

                              <div class="single-work-time d-sm-flex justify-content-between">
                                <p>Sunday  <span class="time">09:00 AM - 07:00 PM</span></p>

                              </div> <!-- single work time -->

                              <div class="single-work-time d-sm-flex justify-content-between">
                                <p>Friday <span class="closed">CLOSED</span></p>
                                <p class="number"><i class="lni-phone-handset"></i> 972592205023</p>
                            </div> <!-- single work time -->
                            <div class="single-work-time">
                                <a class="main-btn" href="#">time table</a>
                            </div> <!-- single work time -->
                        </div>
                    </div> <!-- working area -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->











        
        <div class="working-bg"></div> <!-- working bg -->
    </section>

    <!--====== APPOINTMENT WORKING PART ENDS ======-->

    <!--====== BLOG PART START ======-->

    <section class="blog-tow-area pt-80 pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="section-title mt-45 mb-30">
                        <h5 class="sub-title">Better information, Better health</h5>
                        <h3 class="title">News</h3>
                    </div> <!-- section title -->
                </div>
                <div class="col-lg-8">
                    <div class="row blog-tow-active pt-20">
                        @foreach($newses as $news_item)
                        <div class="col-lg-6">
                            <div class="single-blog mt-30 mb-30">
                                <div class="blog-thumb">
                                    <a href="{{ route('news.show', $news_item->id) }}"><img style="max-height: 200px; min-height: 200px" src="{{ $news_item->image_path }}" alt="Blog"></a>
                                </div>
                                <div class="blog-content">
                                    <h6 class="sub-title">{{ \Illuminate\Support\Carbon::createFromFormat('Y-m-d H:i:s', $news_item->created_at)->format('l d, F Y') }} | By {{ $news_item->admin->name }}</h6>
                                    <h3 class="title"><a href="#">{{ $news_item->title }}/a></h3>
                                    <a class="more" href="{{ route('news.show', $news_item->id) }}">Read More <i class="lni-chevron-right"></i></a>
                                </div>
                            </div> <!-- single blog -->
                        </div>
                        @endforeach
                    </div> <!-- blog-tow-active -->


                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== BLOG PART ENDS ======-->

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


<!-- start footer -->
@include('web.footersection')
<!-- end footer -->