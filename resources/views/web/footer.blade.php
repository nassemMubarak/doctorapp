<footer>
    <div class="container">
        <div class="logo">
            <div class="images">
                <img src="{{ asset('assets/web/assets/images/Luxi-Hosting-Logo.png') }}" alt="">
                <img src="{{ asset('assets/web/assets/images/Meddical.png') }}" alt="">
            </div>
            <p>Leading the Way in Medical <br> Execellence, Trusted Care.</p>
        </div>
        <div class="links">
            <h3>Important Links</h3>
            <ul>
                <li><a href="{{ route('appointments.index') }}">Appointment</a></li>
                <li><a href="{{ route('doctors.index') }}">Doctors</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="{{ route('about') }}">About Us</a></li>
            </ul>
        </div>
        <div class="contact">
            <h3>Contact Us</h3>
            <ul>
                <li><span>Call: (+972) 0599876541</span></li>
                <li><span>Call: (+972) 0599877891</span></li>
                
                
            </ul>
        </div>
        <div class="email">
            <h3>Our Accounts</h3>
            <div class="socialmedia-icons">
                <div><i class="fa-brands fa-linkedin-in"></i></div>
                <div><i class="fa-brands fa-facebook-f"></i></div>
                <div><i class="fa-brands fa-instagram"></i></div>
            </div>
        </div>
    </div>
    <div class="container" style="justify-content: center">
        <span>{{ config('app.name') }}  ©{{date('Y')}} , All Rights Reserved</span>

    </div>
</footer>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
    @if(Session::has('success'))
        toastr.options =
        {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut",
            "background-color": "#4CAF50",

        }
    toastr.success("{{ session('success') }}");
    @endif

        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.error("{{ session('error') }}");
    @endif

        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.info("{{ session('info') }}");
    @endif

        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.warning("{{ session('warning') }}");
    @endif

</script>

