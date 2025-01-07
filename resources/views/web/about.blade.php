<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/normlize.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
    <link rel="website icon" type="png" href="{{ asset('assets/web/assets/images/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/style.css') }}">
    <title>About As</title>
</head>

<body>

@include('web.header')

<div class="landing">
    <h1>About us</h1>
    <div></div>
</div>
<!-- Start section cardes  -->
<div class="container">
    <h1 class="title-head">Our Offer</h1>
    <div class="row d-flex justify-content-between col-4 col-sm-12">

        <div class="item">
            <h3 class="card-title">ADVICE</h3>
            <p class="content">From this site , you can request online consltation from specialist doctor.</p>
        </div>

        <div class="item">
            <h3 class="card-title">ADVICE</h3>
            <p class="content">From this site , you can request online consltation from specialist doctor.</p>
        </div>

        <div class="item">
            <h3 class="card-title">FULL CARE</h3>
            <p class="content">Provide primary care , diagnostic services , lab services , and varity of resource to educate
                patient about health.</p>
        </div>

    </div>
</div>
<!-- End section cardes -->
<!-- Start Section information -->
<div class="info d-lg-block d-sm-none" style="height: 441px; margin-top: 50px;">
    <img class="info" src="images/Rectangle 100.png" alt="info-img" style="height: 441px; width: 1366px;">
    <div class="info-box ">
        <div class="big-box">
            <i class="fa-solid fa-quote-right"></i>
            <p class="content-info ">Medicine is not only a science; it is also an art. It does not consist of compounding
                pills and plasters;
                it deals with the very processes of life,
                which must be understood before they may be guided.</p>
            <div class="border"></div>
            <p class="Paracelsus">Paracelsus</p>
            <div class="cirales d-flex justify-content-center">
                <div class="circal"></div>
                <div class="circal" style="background-color: #BFD2F8;"></div>
                <div class="circal"></div>
            </div>
        </div>
    </div>
</div>
<!-- End Section information -->
<!-- Start Section Department -->
<div class="container ">
    <div class="title-sec text-center">
        <p class="topic1">Always Caring</p>
        <p class="topic2 ">Medical Department</p>
    </div>
    <div class="row justify-content-center align-items-center">
        <div class="department col-3">
            <div class="data">
                <img src="{{ asset('assets/web/assets/images/brain 1.png') }}" alt="brain">
                <p>Neurology</p>
            </div>
        </div>
        <div class="department col-3">
            <div class="data">
                <img src="{{ asset('assets/web/assets/images/heart.png') }}" style="width: 50px;" alt="Vector">
                <p>Bones</p>
            </div>
        </div>
        <div class="department col-3">
            <div class="data">
                <img src="{{ asset('assets/web/assets/images/dna 1.png') }}" alt="dna">
                <p>Oncology</p>
            </div>
        </div>
        <div class="department col-3">
            <div class="data">
                <img src="{{ asset('assets/web/assets/images/ear 1.png') }}" alt="ear">
                <p>Otorhinolaryngology</p>
            </div>
        </div>
        <div class="department col-3">
            <div class="data">
                <img src="{{ asset('assets/web/assets/images/view 1.png') }}" alt="view">
                <p>Ophthalmology</p>
            </div>
        </div>
        <div class="department col-3">
            <div class="data">
                <img src="{{ asset('assets/web/assets/images/heart 1.png') }}" alt="heart">
                <p>Cardiovascular</p>
            </div>
        </div>
        <div class="department col-3">
            <div class="data">
                <img src="{{ asset('assets/web/assets/images/pulmonology 1.png') }}" alt="pulmonology">
                <p>Pulmonology</p>
            </div>
        </div>
        <div class="department col-3">
            <div class="data">
                <img src="{{ asset('assets/web/assets/images/kidney 1.png') }}" alt="kidney">
                <p>Renal Medicine</p>
            </div>
        </div>
        <div class="department col-3">
            <div class="data">
                <img src="{{ asset('assets/web/assets/images/gastroenterologist 1.png') }}" alt="gastroenterologist">
                <p>Gastroenterology</p>
            </div>
        </div>
        <div class="department col-3">
            <div class="data ">
                <img src="{{ asset('assets/web/assets/images/urology 1.png') }}" alt="urology">
                <p>Urology</p>
            </div>
        </div>
        <div class="department col-3">
            <div class="data">
                <img src="{{ asset('assets/web/assets/images/dermatology 1.png') }}" alt="dermatology">
                <p>Dermatology</p>
            </div>
        </div>
        <div class="department col-3">
            <div class="data">
                <img src="{{ asset('assets/web/assets/images/pelvic-exam 1.png') }}" alt="pelvic-exam">
                <p>Gynaecology</p>
            </div>
        </div>
    </div>
</div>
<!-- End Section Department -->

<!-- Start section our Doctor -->

<!-- start our doctor -->
@include('web.pages.doctors')
<!-- end our doctor -->

<!-- End section our Doctor -->

<!-- Start section contact -->
<div class="container ">
    <div class="title-sec text-center">
        <p class="topic1" style="margin-top: 107px;">Get in touch</p>
        <p class="topic2 ">Contact</p>
    </div>
    <div class="row  justify-content-center align-items-center " style="margin-top: 64px;">
        <div class="box ">
            <i class="fa-solid fa-phone "></i>
            <h4>EMERGENCY</h4>
            <span>(+972) 432-678-123</span>
            <span>(+972) 432-678-123</span>
        </div>
        <div class="box">
            <i class=" fa-solid fa-location-dot "></i>
            <h4>LOCATION</h4>
            <span>Palestine - Gaza</span>
            <span>9876 Some country</span>
        </div>
        <div class="box">
            <i class="fa-regular fa-envelope "></i>
            <h4>EMAIL</h4>
            <span>Medicalcare@gmil.com</span>
            <span>myebstudios@gmail.com</span>
        </div>
        <div class="box">
            <i class="fa-regular fa-clock "></i>
            <h4>WORKING HOURS</h4>
            <span>Mon-Sat 09:00-20:00</span>
            <span>Sunday Emergency only</span>
        </div>
    </div>
</div>
<!-- start footerr -->
@include('web.footer')
<!-- End footer -->
<script src="{{ asset('assets/web/assets/js/script.js') }}"></script>
<script src="{{ asset('assets/web/assets/js/home.js') }}"></script>
<script src="{{ asset('assets/web/assets/js/bootstrap.bundle.js') }}"></script>

</body>

</html>
