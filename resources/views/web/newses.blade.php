
@include('web.headersection')
   


{{-- <div class="news">
    <div class="container">
        <div class="plogs">
            <div class="boxs">
                @foreach($newses as $news)
                <div class="box">
                    <img src="{{ $news->image_path }}" alt="">
                    <div class="icons">
                        <div class="calender"><i class="ri-calendar-line"></i> <span>{{ \Illuminate\Support\Carbon::createFromFormat('Y-m-d H:i:s', $news->created_at)->format('l d, F Y')  }}</span></div>
                        <div class="user"><i class="ri-user-line"></i><span>By {{ $news->admin->name }}</span></div>
                    </div>
                    <h2>{{ $news->title }}</h2>
                    <p>{{ substr($news->description, 0, 50) }}</p>
                    <a href="{{ route('news.show', $news->id) }}">Read More<i class="ri-arrow-right-line"></i></a>
                </div>
                @endforeach
            </div>
            <div class="scroll">
             </div>
        </div>
        <div class="posts-catagories" id = "hide">
            <form action="">
                <input id="sch" type="search" placeholder="Search" onkeyup="search()">
                <p><i class="ri-search-line"></i></p>
            </form>
            <div class="recentposts">
                <h3>Recent Posts</h3>
                <ul>
                    @foreach($newses as $news)
                    <a href="{{ route('news.show', $news->id) }}">
                    <li>
                        <img src="{{ $news->image_path }}" alt="">
                        <div class="info">
                            <span>{{ \Illuminate\Support\Carbon::createFromFormat('Y-m-d H:i:s', $news->created_at)->format('l d, F Y')  }}</span>
                            <span>{{ $news->title }}</span>
                        </div>
                    </li>
                    </a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
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



 
    <section class="page-banner bg_cover" style="background-image: url(assets/images/page-banner-2.jpg)" data-overlay="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-content text-center">
                        <h2 class="page-title">News</h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div> <!-- page content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->
    
    <!--====== DEPARTMENT PART START ======-->

    <section class="department-page pt-100 pb-130">
        <div class="container">
            <div class="row">
                @foreach($newses as $news)

                <div class="col-lg-4 col-md-6">
                    <div class="single-department-two mt-30">
                        <div class="department-thumb">
                            <a href="{{ route('news.show', $news->id) }}"><img style="max-height: 200px" src="{{ $news->image_path }}" alt="department"></a>
                        </div>
                        <div class="department-content text-center">
                            <h4 class="department-title"><a href="{{ route('news.show', $news->id) }}">{{ $news->title }}</a></h4>
                            <p class="text">{{ substr($news->description, 0, 50) }}.</p>
                            <a class="main-btn main-btn-2" href="{{ route('news.show', $news->id) }}">Read More</a>
                        </div>
                    </div> <!-- single department two -->
                </div>
                @endforeach
       
                {{-- @foreach($newses as $news)
                <div class="box">
                    <img src="{{ $news->image_path }}" alt="">
                    <div class="icons">
                        <div class="calender"><i class="ri-calendar-line"></i> <span>{{ \Illuminate\Support\Carbon::createFromFormat('Y-m-d H:i:s', $news->created_at)->format('l d, F Y')  }}</span></div>
                        <div class="user"><i class="ri-user-line"></i><span>By {{ $news->admin->name }}</span></div>
                    </div>
                    <h2>{{ $news->title }}</h2>
                    <p>{{ substr($news->description, 0, 50) }}</p>
                    <a href="{{ route('news.show', $news->id) }}">Read More<i class="ri-arrow-right-line"></i></a>
                </div>
                @endforeach
 --}}







            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="department-btn pt-80 text-center">
                        <a class="main-btn" href="#">Viwe More</a>
                    </div>
                </div>
            </div>
        </div> <!-- container -->
    </section>

    <!--====== DEPARTMENT PART ENDS ======-->
    
   
    <!--====== APPOINTMENT WORKING PART ENDS ======-->
    
    <!--====== TESTIMONIAL PART START ======-->

    <section class="testimonial-two-area pt-125 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-title">
                        <h5 class="sub-title">Testimonials</h5>
                        <h3 class="title">Service Recipient Says</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-two-active">
                        <div class="single-testimonial-two mt-60">
                            <div class="testimonial-content">
                                <i class="lni-quotation"></i>
                                <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis turpis vitae tortor convallis eleifend. In volutpat maximus mauris non fringilla. Cras pulvinar aliquam massa nec lacinia.</p>
                                <h5 class="testimonial-name">Mohammad Mostofa</h5>
                                <span>- Random Customer</span>
                            </div> <!-- testimonial content -->
                            <div class="testimonial-image">
                                <img src="assets/images/testimonial.png" alt="testimonial">
                            </div>
                        </div> <!-- single testimonial -->
                        <div class="single-testimonial-two mt-60">
                            <div class="testimonial-content">
                                <i class="lni-quotation"></i>
                                <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis turpis vitae tortor convallis eleifend. In volutpat maximus mauris non fringilla. Cras pulvinar aliquam massa nec lacinia.</p>
                                <h5 class="testimonial-name">Bobby Akter</h5>
                                <span>- Random Customer</span>
                            </div> <!-- testimonial content -->
                            <div class="testimonial-image">
                                <img src="assets/images/testimonial.png" alt="testimonial">
                            </div>
                        </div> <!-- single testimonial -->
                        <div class="single-testimonial-two mt-60">
                            <div class="testimonial-content">
                                <i class="lni-quotation"></i>
                                <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis turpis vitae tortor convallis eleifend. In volutpat maximus mauris non fringilla. Cras pulvinar aliquam massa nec lacinia.</p>
                                <h5 class="testimonial-name">Humayun Ahmed</h5>
                                <span>- Random Customer</span>
                            </div> <!-- testimonial content -->
                            <div class="testimonial-image">
                                <img src="assets/images/testimonial.png" alt="testimonial">
                            </div>
                        </div> <!-- single testimonial -->
                    </div> <!-- testimonial active -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TESTIMONIAL PART ENDS ======-->

    <!--====== CALL TO ACTION PART START ======-->

   



@include('web.footersection')
