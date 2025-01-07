<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/all.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
    <link rel="website icon" type="png" href="{{ asset('assets/web/assets/images/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/style.css') }}">
    <title>Free Checkup</title>
</head>

<body>
@include('web.header')
<div class="landing">
    <h1>Free Checkup</h1>
    <div></div>
</div>
<!-- start section 1 --> 
<div class="container d-lg-flex justify-content-center d-sm-block style" style="">
    @include('web.pages.side-menu')
    <div class="care-section">
        <img class="d-lg-block d-sm-none" src="{{ asset('assets/web/assets/images/section-care.png') }}"/>
        <p class="sup-head">A passion for putting patients first</p>
        <div class="row " style="">
            <div class=" item-care col-sm-12 col-lg-4 ">
                <div class="dot"></div>A Passion for Healing
            </div>
            <div class="item-care col-sm-12 col-lg-4">
                <div class="dot"></div>5-Star Care
            </div>
            <div class="item-care col-sm-12 col-lg-4">
                <div class="dot"></div>A Legacy of Excellence
            </div>
        </div>
        <div class="row">
            <div class=" item-care col-sm-12 col-lg-4 ">
                <div class="dot"></div>All our best
            </div>
            <div class="item-care col-sm-12 col-lg-4">
                <div class="dot"></div>Believe in Us
            </div>
            <div class="item-care col-sm-12 col-lg-4">
                <div class="dot"></div>Always Caring
            </div>
        </div>
        <p class="content-paragraph">"A passion for putting patients first" is a fundamental principle of quality
            healthcare
            By prioritizing patient-centered care, empathy and compassion, continuity of care,
            accessible care, and patient education, healthcare providers can demonstrate a passion for putting patients
            first.
            This approach can improve patient outcomes and satisfaction, build trust and loyalty, and ultimately,
            create a healthier and more connected healthcare community.</p>
    </div>
</div>

<!-- start section our Doctor -->

<!-- start our doctor -->
@include('web.pages.doctors')
<!-- end our doctor -->

<!-- End section our Doctor -->
<!-- start footer -->
@include('web.footer')
<!-- End footer -->
<script src="{{ asset('assets/web/assets/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('assets/web/assets/js/home.js') }}"></script>
</body>

</html>
