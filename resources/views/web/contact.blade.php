
@include('web.headersection')

{{-- <div class="contact-us">
    <div class="map">
        <div class="container">
            <iframe src="https://www.google.com/maps/d/embed?mid=1B1lAsUpYFg82Je7XN1_cxRPf1UU&hl=en_US&ehbc=2E312F" width="640"
                    height="480"></iframe>
        </div>
    </div>
    <div class="contact">
        <div class="container">
            <div class="inputs">
                <h3>GET IN TOUCH</h3>
                <h3>Contact</h3>
                <form action="{{ route('contacts.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="text" placeholder="Name" name="name" value="{{ Auth::user()->name }}" readonly>
                    <input type="email" placeholder="Email" name="email" value="{{ Auth::user()->email }}" readonly>
                    <input type="text" placeholder="Subject" name="subject" required>
                    <textarea id="" cols="30" rows="10" placeholder="Message" name="message" required></textarea>
                    <button type="submit">SUBMIT</button>
                </form>
            </div>
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
                    <span>Palestine - Gaza</span>
                    <span>9876 Some country</span>
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
    </div>
    @include('web.footer')
</div> --}}


    
    <!--====== PAGE BANNER PART START ======-->

    <section class="page-banner bg_cover" style="background-image: url(assets/images/page-banner-8.jpg)" data-overlay="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-content text-center">
                        <h2 class="page-title">Contact Us</h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div> <!-- page content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->
    
    <!--====== CONTACT PART START ======-->

    <section class="contact-page pt-80 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-form pt-20">
                        <form id="contact-form" action="{{ route('contacts.store') }}" method="post" data-toggle="validator">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">




                            


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-contact-form form-group">
                                        <input type="text" name="name" placeholder="Name" value="{{ Auth::user()->name }}" data-error="Name is required." required="required">
                                        <div class="help-block with-errors"></div>
                                        <i class="lni-user"></i>
                                    </div> <!-- single-contact-form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-contact-form form-group">
                                        <input type="email" placeholder="Email" name="email" value="{{ Auth::user()->email }}" readonly data-error="Valid email is required." required="required">
                                        <div class="help-block with-errors"></div>
                                        <i class="lni-envelope"></i>
                                    </div> <!-- single-contact-form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-contact-form form-group">
                                        <input type="text"  name="subject" required placeholder="Subject"  data-error="Subject is required." required="required">
                                        <div class="help-block with-errors"></div>
                                        <i class="lni-pencil"></i>
                                    </div> <!-- single-contact-form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-contact-form form-group">
                                        <input type="text" name="phone" placeholder="Phone Number"  data-error="Phone is required." required="required">
                                        <div class="help-block with-errors"></div>
                                        <i class="lni-phone-handset"></i>
                                    </div> <!-- single-contact-form -->
                                </div>
                                <div class="col-md-12">
                                    <div class="single-contact-form form-group">
                                        <textarea name="message" placeholder="Your Comment" data-error="Please,leave us a message." required="required"></textarea>
                                        <div class="help-block with-errors"></div>
                                        <i class="lni-pencil-alt"></i>
                                    </div> <!-- single-contact-form -->
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="single-contact-form form-group">
                                        <button type="submit" class="main-btn">Submit</button>
                                    </div> <!-- single-contact-form -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- contact-form -->
                </div>
                <div class="col-lg-4">
                    <div class="contact-info mt-50">
                        <h4 class="info-title">Don’t Hesitate to contact with us for any kind of information</h4>
                        <ul>
                            <li>
                                <div class="single-info">
                                    <div class="info-icon">
                                        <i class="lni-money-location"></i>
                                    </div>
                                    <div class="info-content">
                                        <p class="text">900 Lucerne Terrace,Orlando, <br> FL 32806, USA</p>
                                    </div>
                                </div> <!-- single-info -->
                            </li>
                            <li>
                                <div class="single-info">
                                    <div class="info-icon">
                                        <i class="lni-phone"></i>
                                    </div>
                                    <div class="info-content">
                                        <p class="text">+198 555 4444</p>
                                        <p class="text">+193 444 9898</p>
                                    </div>
                                </div> <!-- single-info -->
                            </li>
                            <li>
                                <div class="single-info">
                                    <div class="info-icon">
                                        <i class="lni-envelope"></i>
                                    </div>
                                    <div class="info-content">
                                        <p class="text">contact@Medical.com</p>
                                    </div>
                                </div> <!-- single-info -->
                            </li>
                        </ul>
                        <ul class="social">
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni-behance-original"></i></a></li>
                            <li><a href="#"><i class="lni-youtube"></i></a></li>
                        </ul>
                    </div> <!-- contact-info -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                     <div class="contact-map mt-130">
                        <div class="gmap_canvas">                            
                            <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div> <!-- contact map -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->

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