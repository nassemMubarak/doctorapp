{{-- @include('web.headersection') --}}

@include('web.headersection')

 
{{-- <div class="landing">
    <h1>The News</h1>
    <div></div>
</div>
<div class="news">
    <div class="container">
        <div class="plogs two">
            <div class="box">
                <img src="{{ $news->image_path }}" alt="">
                <div class="icons">
                    <div class="calender"><i class="ri-calendar-line"></i> <span class="a">{{ \Illuminate\Support\Carbon::createFromFormat('Y-m-d H:i:s', $news->created_at)->format('l d, F Y')  }}</span></div>
                    <div class="user"><i class="ri-user-line"></i><span class="b">By {{ $news->admin->name }}</span></div>
                </div>
                <h2>{{ $news->title }}</h2>
                <p>{{ $news->description }}</p>
            </div>
        </div>
        <div class="posts-catagories">
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
                                <span style="color: black">{{ $news->title }}</span>
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
<!-- <footer> -->


    
    <section class="page-banner bg_cover" style="background-image: url(assets/images/page-banner-3.jpg)" data-overlay="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-content text-center">
                        <h2 class="page-title"> News Details</h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">News Details</a></li>
                        </ul>
                    </div> <!-- page content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->
    
    <!--====== DEPARTMENT DETAILS PART START ======-->

    <section class="department-details-page pt-80 pb-125">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">


                    

                    <div class="department-details mt-50">
                        <div class="details-thumb">
                            <img src="{{ $news->image_path }}" alt="Department Details">
                        </div>
                        <div class="icons">
                            <div class="calender"><i class="ri-calendar-line"></i> <span class="a">{{ \Illuminate\Support\Carbon::createFromFormat('Y-m-d H:i:s', $news->created_at)->format('l d, F Y')  }}</span></div>
                            <div class="user"><i class="ri-user-line"></i><span class="b">By {{ $news->admin->name }}</span></div>
                        </div>

                        <div class="details-title">
                            <h3 class="title">{{ $news->title }}</h3>
                        </div>
                        <div class="details-content">
                            <p class="text">{{ $news->description }}.</p>
                        </div>
                         <div class="details-content">
                            <p class="text">It is a long established fact that a reader will be distracted by the way to readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English is most common.</p>
                        </div>
                        <div class="details-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</li>
                                <li><i class="lni-check-mark-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</li>
                                <li><i class="lni-check-mark-circle"></i> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremq laudantium, totam rem aperiam</li>
                            </ul>
                        </div>
                    </div> <!-- department details -->
                </div>
                <div class="col-lg-4">
                    <div class="department-sidebar">
                        <div class="sidebar-department-list mt-50">
                            <div class="sidebar-title">
                                <h4 class="title">Our News</h4>
                            </div>
                            <div class="department-list">
                                
                                <ul>
                                    @foreach($newses as $news)
                                    <li><a href="{{ route('news.show', $news->id) }}"><i class="lni-chevron-right"></i> {{ $news->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div> <!-- sidebar-department-list -->
                        
                        {{-- <div class="sidebar-department-appointment mt-50">
                            <div class="sidebar-title">
                                <h4 class="title">Make An Appointment</h4>
                            </div>
                            <div class="department-appointment">
                                <form action="#">
                                    <div class="single-department-form">
                                        <input type="text" placeholder="Your Name">
                                        <i class="lni-user"></i>
                                    </div>
                                    <div class="single-department-form">
                                        <input type="email" placeholder="Email Address">
                                        <i class="lni-envelope"></i>
                                    </div>
                                    <div class="single-department-form">
                                        <textarea placeholder="Your Message"></textarea>
                                        <i class="lni-pencil"></i>
                                    </div>
                                    <div class="single-department-form">
                                        <button class="main-btn" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div> 
                        </div> <!-- sidebar-department-appointment -->
                        
                        <div class="sidebar-department-download mt-50">
                            <div class="sidebar-title">
                                <h4 class="title">Free Download</h4>
                            </div>
                            <div class="department-download">
                                <ul>
                                    <li><a href="#"><i class="lni-download"></i>Medecine and Health.pdf <span>65kb</span> </a></li>
                                    <li><a href="#"><i class="lni-download"></i>Medecine and Health.exl <span>117kb</span></a></li>
                                    <li><a href="#"><i class="lni-download"></i>Medecine and Health.zip <span>220kb</span></a></li>
                                </ul>
                            </div>
                        </div> <!-- sidebar-department-download --> --}}
                    </div> <!-- department-sidebar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== DEPARTMENT DETAILS PART ENDS ======-->
    
    <!--====== TEAM PART START ======-->

 



@include('web.footersection')
