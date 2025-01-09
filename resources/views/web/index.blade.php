<!-- start header -->
@include('web.headersection')
<!-- end header -->

<!-- start landing -->
{{-- <div class="landing-home">
    <div class="container">
         <div class="text">
            <p>Caring for Life</p>
            <h1>Leading the Way <br> in Medical Excellence</h1>
            <a href="{{ route('appointments.index') }}">Appointment</a>
         </div>
         <div class="image">
            <img src="{{ asset('assets/web/assets/images/docImg.png') }}" alt="">
         </div>
    </div>
</div>
<!-- end landing -->

<!-- start cart -->
<div class="carts">
    <div class="container">
        <div class="cart">
            <p>Book an Appointment</p>
            <i class="fa-solid fa-calendar-days"></i>
        </div>
        <div class="cart">
            <p>Our Latest News</p>
            <i class="fa-solid fa-users"></i>        </div>
        <div class="cart">
            <p>Free Medical Examination</p>
            <i class="fa-solid fa-money-bill-1"></i>        </div>

    </div>
</div>
<!-- end cart -->

<!-- start information -->
<div class="information">
    <div class="container">
        <p>Welcome to Meddical</p>
        <h2>A Great Place to Receive Care</h2>
        <p>Welcome to our medical site, where you can find reliable and up-to-date <br> information on a wide range of health topics, from preventive care to complex <br> medical conditions. Our goal is to provide you with the resources and tools you <br> need to make informed decisions about your health and well-being.</p>
        <img src="{{ asset('assets/web/assets/images/Blackdoctors 1.png') }}" alt="">
    </div>
</div>
<!-- end information -->

<!-- start our offer -->
<div class="our-offer">
    <div class="container">
        <div class="text">
            <p>Care you can believe in</p>
            <h2>Our Offer</h2>
        </div>
        <div class="content">
            <div class="servs">
                <div class="serve ">
                    <a href="{{ route('checkup') }}">
                        <img src="{{ asset('assets/web/assets/images/Vector (1).png') }}" alt="">
                        <p>Free Checkup</p>
                    </a>
                </div>
                <div class="serve active">
                    <a href="{{ route('cardiogram') }}">
                        <img src="{{ asset('assets/web/assets/images/Vector (2).png') }}" alt="">
                        <p>Cardiogram</p>
                    </a>
                </div>
                <div class="serve">
                    <a href="{{ route('DAN-testing') }}">
                        <img src="{{ asset('assets/web/assets/images/Vector.png') }}" alt="">
                        <p>DNA Testing</p>
                    </a>
                </div>
                <div class="serve">
                    <a href="{{ route('blood-bank') }}">
                        <img src="{{ asset('assets/web/assets/images/Vector (3).png') }}" alt="">
                        <p>Blood Bank</p>
                    </a>
                </div>
                <a class="a" href="{{ route('services') }}">View All</a>
            </div>
            <div class="text">
                <h3>A passion for putting patients first.</h3>
                <div class="list">
                    <ul>
                        <li>A Passion for Healing</li>
                        <li>All our best</li>
                        <li>A Legacy of Excellence</li>
                    </ul>
                    <ul>
                        <li>5-Star Care</li>
                        <li>Believe in Us</li>
                        <li>Always Caring</li>
                    </ul>
                </div>
                <p>We offer a full spectrum of medical services, including preventive care, primary care, specialty care, and diagnostic services. Our preventive care services focus on promoting good health and wellness through regular check-ups, screenings, and immunizations.</p>
                <br>
                <p>Our primary care services cover a wide range of medical conditions, such as acute illnesses, chronic diseases, and injuries. For patients with more complex medical needs, we offer specialty care services, including cardiology, dermatology, gastroenterology, neurology, and more. Finally, our diagnostic services include laboratory testing, imaging studies, and other tests that help us accurately diagnose and treat medical conditions.</p>
            </div>
            <div class="image">
                <img src="{{ asset('assets/web/assets/images/Rectangle 13.png') }}" alt="">
                <img src="{{ asset('assets/web/assets/images/Rectangle 14.png') }}" alt="">
            </div>
        </div>
    </div>

</div>
<!-- end our offer -->

<!-- start always caring -->
<div class="always-caring">
    <div class="container">
        <p>Always Caring</p>
        <div class="carts">
            <div class="cart">
                <img src="{{ asset('assets/web/assets/images/brain 1.png') }}" alt="">
                <p>Neurology</p>
            </div>
            <div class="cart">
                <img src="{{ asset('assets/web/assets/images/heart.png') }}" alt="">
                <p>Bones</p>
            </div>
            <div class="cart">
                <img src="{{ asset('assets/web/assets/images/dna 1.png') }}" alt="">
                <p>Oncology</p>
            </div>
            <div class="cart">
                <img src="{{ asset('assets/web/assets/images/ear 1.png') }}" alt="">
                <p>Otorhinolaryngology</p>
            </div>
            <div class="cart">
                <img src="{{ asset('assets/web/assets/images/view 1.png') }}" alt="">
                <p>Ophthalmology</p>
            </div>
            <div class="cart">
                <img src="{{ asset('assets/web/assets/images/heart 1.png') }}" alt="">
                <p>Cardiovascular</p>
            </div>
            <div class="cart">
                <img src="{{ asset('assets/web/assets/images/urology 1.png') }}" alt="">
                <p>Pulmonology</p>
            </div>
            <div class="cart">
                <img src="{{ asset('assets/web/assets/images/kidney 1.png') }}" alt="">
                <p>Renal Medicine</p>
            </div>
            <div class="cart">
                <img src="{{ asset('assets/web/assets/images/gastroenterologist 1.png') }}" alt="">
                <p>Gastroenterology</p>
            </div>
            <div class="cart">
                <img src="{{ asset('assets/web/assets/images/urology 1.png') }}" alt="">
                <p>Urology</p>
            </div>
            <div class="cart">
                <img src="{{ asset('assets/web/assets/images/dermatology 1.png') }}" alt="">
                <p>Dermatology</p>
            </div>
            <div class="cart">
                <img src="{{ asset('assets/web/assets/images/pelvic-exam 1.png') }}" alt="">
                <p>Gynaecology</p>
            </div>
        </div>
    </div>
</div>
{{-- <!-- end always caring --> --}}
<!-- start book appointment -->
{{-- <div class="book-appointment">
    <div class="container">
        <div class="left">
            <div class="text">
                <h2>Free medical advice</h2>
                <p>Ask the Doctor for advice Free medical advice Free medical advice Free medical adviceFree medical adviceFree medical adviceFree medical advice Ask the Doctor for advice Free medical advice Free medical advice Free medical adviceFree medical adviceFree medical adviceFree medical advice</p>
                </div>
        </div>
        <div class="right">
            <form action="{{ route('messages.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="name" placeholder="Name" required value="{{ Auth::user()->name }}" readonly>
                <input type="email" name="email" placeholder="Email" required value="{{ Auth::user()->email }}" readonly>
                <input type="text" name="phone" placeholder="Phone" required value="{{ Auth::user()->mobile }}" readonly>
                <input type="hidden" name="user_id" required value="{{ Auth::user()->id }}">
                <div>
                    <i class="fa-solid fa-chevron-up i"></i>
                    <select name="doctor_id" required>
                        <option value="" disabled selected hidden>Doctor</option>
                        @foreach ($doctors as $doctor)
                        <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                        @endforeach
                    </select>
                </div>
                <textarea name="message" placeholder="Message" maxlength="100" required></textarea>
                <input style="width:100%; padding-top: 10px" type="file" name="file">

                <input type="submit">
            </form>
        </div>
    </div>
</div> --}}






<!-- end book an appontment  -->

{{-- <!-- start news -->
<div class="news">
    <div class="container">
        <p>Better information, Better health</p>
        <h2>News</h2>
        <div class="new">
            @foreach ($newses as $news)
            <a href="{{ route('news.show', $news->id) }}">
                <div class="box" id="1">
                    <img src="{{ $news->image_path }}" alt="">
                    <div class="text">
                        <span>{{ \Illuminate\Support\Carbon::createFromFormat('Y-m-d H:i:s', $news->created_at)->format('l d, F Y') }} | By {{ $news->admin->name }}</span>
                        <p>{{ $news->title }}</p>
                    </div>
                </div>
            </a>
            @endforeach

        </div>
        <div class="top">
            <i class="fa-solid fa-circle-chevron-down up"></i>
            <i class="fa-solid fa-circle-chevron-up down"></i>
        </div>
    </div>
</div> --}}
<!-- end news -->


<!-- end
-->





<section class="slider-area">
    <div class="slider-active">
        <div class="single-slider">
            <div class="slider-image bg_cover" data-overlay="4" data-animation="kenburns"
                style="background-image: url(assets/images/slider/s-1.jpg)"></div>

            <div class="slider-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="content overflow-hidden">
                                <h5 class="slider-sub-title sub-title" data-animation="fadeInUp" data-delay="0.5s">
                                    Bootstrap 4 Based</h5>
                                <h1 class="slider-title title" data-animation="fadeInUp" data-delay="1s">Medical &
                                    Healthcare Template</h1>
                                <a class="main-btn" href="#" data-animation="fadeInLeft" data-delay="1.5s">read
                                    more</a>
                            </div>
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- slider content -->
        </div> <!-- single slider -->

        <div class="single-slider">
            <div class="slider-image bg_cover" data-overlay="4" data-animation="kenburns"
                style="background-image: url(assets/images/slider/s-2.jpg)"></div>

            <div class="slider-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="content overflow-hidden">
                                <h5 class="slider-sub-title sub-title" data-animation="fadeInUp" data-delay="0.5s">
                                    Multipurpose Template</h5>
                                <h1 class="slider-title title" data-animation="fadeInUp" data-delay="1s">Clean Design
                                    and </br>Responsive Layout</h1>
                                <a class="main-btn" href="#" data-animation="fadeInLeft" data-delay="1.5s">read
                                    more</a>
                            </div>
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- slider content -->
        </div> <!-- single slider -->

        <div class="single-slider">
            <div class="slider-image bg_cover" data-overlay="4" data-animation="kenburns"
                style="background-image: url(assets/images/slider/s-3.jpg)"></div>

            <div class="slider-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="content overflow-hidden">
                                <h5 class="slider-sub-title sub-title" data-animation="fadeInUp" data-delay="0.5s">All
                                    Essential</h5>
                                <h1 class="slider-title title" data-animation="fadeInUp" data-delay="1s">Pages and
                                    Features</br>for Medical Sites</h1>
                                <a class="main-btn" href="#" data-animation="fadeInLeft" data-delay="1.5s">read
                                    more</a>
                            </div>
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- slider content -->
        </div> <!-- single slider -->
    </div> <!-- slider active -->
</section>


<div class="book-appointment py-5">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Error Message -->
    @if ($errors->has('error'))
        <div class="alert alert-danger">
            {{ $errors->first('error') }}
        </div>
    @endif

    <div class="container">
        <div class="row g-5 align-items-center">
            <!-- Left Side Text Section -->
            <!-- Right Side Form Section -->
            <div class="col-md-12">
                <div class="card shadow-lg p-4">
                    <h3 class="text-center text-secondary mb-4"></h3>
                    <form action="{{ route('messages.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" id="name" name="name" class="form-control"
                                value="{{ Auth::user()->name }}" readonly>
                        </div>
                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control"
                                value="{{ Auth::user()->email }}" readonly>
                        </div>
                        <!-- Phone -->
                        <!-- Hidden User ID -->
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <!-- Doctor Selection -->
                        <div class="mb-3">
                            <label for="doctor_id" class="form-label">Select Doctor</label>
                            <select id="doctor_id" name="doctor_id" class="form-select" required>
                                <option value="" disabled selected hidden>Choose a doctor...</option>
                                @foreach ($doctors as $doctor)
                                    <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- Message -->
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea id="message" name="message" class="form-control" placeholder="Write your message here..."
                                maxlength="100" rows="3" required></textarea>
                        </div>
                        <!-- File Upload -->
                        <div class="mb-3">
                            <label for="file" class="form-label">Upload File (Optional)</label>
                            <input type="file" id="file" name="file" class="form-control">
                        </div>
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary w-100">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mt-5">
    <div class="projects">
        <h2 class="text-primary fw-bold text-center mb-4">Free Medical Advice</h2>
        <div class="table-responsive shadow-lg rounded">
            <table class="table table-hover align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>Doctor</th>
                        <th>Date Sent</th>
                        <th>Time Sent</th>
                        <th>Message</th>
                        <th>Prescription Patient</th>
                        <th>Dr. Message</th>
                        <th>Dr.Prescription </th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $message)
                        <tr>
                            <td>{{ $message->doctor->name }}</td>
                            <td>{{ \Illuminate\Support\Carbon::createFromFormat('Y-m-d H:i:s', $message->created_at)->format('l d, F Y') }}
                            </td>
                            <td>{{ \Illuminate\Support\Carbon::createFromFormat('Y-m-d H:i:s', $message->created_at)->format('h:i A') }}
                            </td>
                            <td>{{ $message->message }}</td>
                            <td>
                                @if ($message->patient_file_path)
                                    <a href="{{ $message->patient_file_path }}" download>
                                        Download File
                                    </a>
                                @else
                                    No file available
                                @endif
                            </td>
                            <td>{{ $message->replay }}</td>
                            <td>
                                @if ($message->doctor_prescription != null)
                                    <a href="{{ $message->doctor_file_path }}" class="btn btn-sm btn-outline-primary"
                                        download>
                                        Download
                                    </a>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('messages.destroy', $message->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                        <i class="fa-solid fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



<!--====== SLIDER PART ENDS ======-->


<!--====== FEATURES PART START ======-->

<section class="features-area pt-100 pb-65">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-8">
                <div class="single-features text-center mt-30">
                    <div class="features-icon">
                        <i class="lni-stethoscope"></i>
                    </div>
                    <div class="features-content">
                        <h4 class="features-title"><a href="#">Advanced Care</a></h4>
                        <p class="text">The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution of letters, as opposed to using.</p>
                        <a class="more" href="#">Read More <i class="lni-chevron-right"></i></a>
                    </div>
                </div> <!-- single features -->
            </div>
            <div class="col-lg-4 col-md-8">
                <div class="single-features text-center mt-30 active">
                    <div class="features-icon">
                        <i class="lni-ambulance"></i>
                    </div>
                    <div class="features-content">
                        <h4 class="features-title"><a href="#">Locations & Directions</a></h4>
                        <p class="text">The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution of letters, as opposed to using.</p>
                        <a class="more" href="#">Read More <i class="lni-chevron-right"></i></a>
                    </div>
                </div> <!-- single features -->
            </div>
            <div class="col-lg-4 col-md-8">
                <div class="single-features text-center mt-30">
                    <div class="features-icon">
                        <i class="lni-first-aid"></i>
                    </div>
                    <div class="features-content">
                        <h4 class="features-title"><a href="#">Quality & Patient Safety</a></h4>
                        <p class="text">The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution of letters, as opposed to using.</p>
                        <a class="more" href="#">Read More <i class="lni-chevron-right"></i></a>
                    </div>
                </div> <!-- single features -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== FEATURES PART ENDS ======-->

<!--====== ABOUT PART START ======-->

<section class="about-area pt-15 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-image mt-50">
                    <img src="{{ asset('assets_medical/Blackdoctors 1.png') }}" alt="about">
                </div> <!-- about-image -->
            </div>
            <div class="col-lg-6">
                <div class="about-content mt-40">
                    <div class="section-title">
                        <h3 class="title">Welcome to Meddical

                            A Great Place to Receive Care.</h3>
                    </div> <!-- section title -->
                    <p class="text">Welcome to our medical site, where you can find reliable and up-to-date
                        information on a wide range of health topics, from preventive care to complex
                        medical conditions. Our goal is to provide you with the resources and tools you
                        need to make informed decisions about your health and well-being..</p>
                </div> <!-- about-content -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== ABOUT PART ENDS ======-->

<!--====== DEPARTMENT PART START ======-->

<section class="department-two-area pt-125 pb-130 gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-center pb-25">
                    <h5 class="sub-title">Trusted Care</h5>
                    <h3 class="title">Our Doctors</h3>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row">
            @foreach ($doctors as $doctor)
                <div class="col-lg-4 col-md-6">
                    <div class="single-department-two mt-30">
                        <div class="department-thumb">
                            <a href="{{ route('doctors.show', $doctor->id) }}"><img style="max-height: 200px;"
                                    src="{{ $doctor->image_path }}" alt="department"></a>
                        </div>
                        <div class="department-content text-center">
                            <h4 class="department-title"><a href="{{ route('doctors.show', $doctor->id) }}">Dr .
                                    {{ $doctor->name }}</a></h4>
                            <p class="text">{{ $doctor->specialization }}.</p>
                            <a class="main-btn main-btn-2" href="{{ route('doctors.show', $doctor->id) }}">View
                                Profile</a>
                        </div>
                    </div> <!-- single department two -->
                </div>
            @endforeach

        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== DEPARTMENT PART ENDS ======-->



<!--====== DOCTOR PART START ======-->

<section class="call-action-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="call-action d-lg-flex justify-content-between align-items-center">
                    <div class="action-content">
                        <h3 class="action-title">You are Using Free Lite Version of Medical</h3>
                        <p class="text">Please purchase full version of the template to get all pages and enjoy all
                            features.</p>
                    </div> <!-- action content -->
                    <div class="action-btn">
                        <a class="main-btn" href="https://rebrand.ly/medical-gg" rel="nofollow">Purchase Now</a>
                    </div> <!-- action btn -->
                </div> <!-- call action -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== DOCTOR PART ENDS ======-->

<!--====== TESTIMONIAL PART START ======-->

<section class="testimonial-two-area pt-125 pb-130 gray-bg">
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
                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
                                quis turpis vitae tortor convallis eleifend. In volutpat maximus mauris non fringilla.
                                Cras pulvinar aliquam massa nec lacinia.</p>
                            <h5 class="testimonial-name">Mohammad Mostofa</h5>
                            <span>- Random Customer</span>
                        </div> <!-- testimonial content -->
                        <div class="testimonial-image">
                            <img src="assets/images/testimonial.jpg" alt="testimonial">
                        </div>
                    </div> <!-- single testimonial -->
                    <div class="single-testimonial-two mt-60">
                        <div class="testimonial-content">
                            <i class="lni-quotation"></i>
                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
                                quis turpis vitae tortor convallis eleifend. In volutpat maximus mauris non fringilla.
                                Cras pulvinar aliquam massa nec lacinia.</p>
                            <h5 class="testimonial-name">Bobby Akter</h5>
                            <span>- Random Customer</span>
                        </div> <!-- testimonial content -->
                        <div class="testimonial-image">
                            <img src="assets/images/testimonial.jpg" alt="testimonial">
                        </div>
                    </div> <!-- single testimonial -->
                    <div class="single-testimonial-two mt-60">
                        <div class="testimonial-content">
                            <i class="lni-quotation"></i>
                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
                                quis turpis vitae tortor convallis eleifend. In volutpat maximus mauris non fringilla.
                                Cras pulvinar aliquam massa nec lacinia.</p>
                            <h5 class="testimonial-name">Humayun Ahmed</h5>
                            <span>- Random Customer</span>
                        </div> <!-- testimonial content -->
                        <div class="testimonial-image">
                            <img src="assets/images/testimonial.jpg" alt="testimonial">
                        </div>
                    </div> <!-- single testimonial -->
                </div> <!-- testimonial active -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== TESTIMONIAL PART ENDS ======-->

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
                    @foreach ($news as $news_item)
                        <div class="col-lg-6">
                            <div class="single-blog mt-30 mb-30">
                                <div class="blog-thumb">
                                    <a href="{{ route('news.show', $news_item->id) }}"><img
                                            style="max-height: 200px; min-height: 200px"
                                            src="{{ $news_item->image_path }}" alt="Blog"></a>
                                </div>
                                <div class="blog-content">
                                    <h6 class="sub-title">
                                        {{ \Illuminate\Support\Carbon::createFromFormat('Y-m-d H:i:s', $news_item->created_at)->format('l d, F Y') }}
                                        | By {{ $news_item->admin->name }}</h6>
                                    <h3 class="title"><a href="#">{{ $news_item->title }}/a></h3>
                                    <a class="more" href="{{ route('news.show', $news_item->id) }}">Read More <i
                                            class="lni-chevron-right"></i></a>
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




<!-- start footer -->
@include('web.footersection')
<!-- end footer -->
