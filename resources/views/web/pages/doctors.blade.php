<div class="our-doctor">
    <div class="container">
        <p>Trusted Care</p>
        <h2>Our Doctors</h2>
        <i class="fa-solid fa-circle-chevron-left leftt"></i>
        <div class="left">
            @foreach(\App\Models\Admin::where('type', 'doctor')->get() as $doctor)
            <a href="{{ route('doctors.show', $doctor->id) }}">
            <div class="doctor-img">
                <img class="img" src="{{ $doctor->image_path }}" alt="image doctor">
                <p>Dr. {{ $doctor->name }}</p>
                <h3>{{ $doctor->specialization }}</h3>
                <div class="icon">
                    <i class="fa-brands fa-linkedin-in"></i>
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
                <span style="color: white">View Profile</span>
            </div>
            </a>
            @endforeach
        </div>
        <i class="fa-solid fa-circle-chevron-right right"></i>
    </div>
</div>

