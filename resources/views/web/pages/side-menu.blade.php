<div class="services d-flex flex-column ">
    <a href="{{ route('checkup') }}" class="serv"> <i class="fa-solid fa-stethoscope"></i> Free Checkup</a>
    <a href="{{ route('cardiogram') }}" class="serv"><i class="fa-solid fa-heart-circle-plus"></i> Cardiogram</a>
    <a href="{{ route('DAN-testing') }}" class="serv"><i class="fa-solid fa-square-plus"></i> Dan Testing</a>
    <a href="{{ route('blood-bank') }}" class="serv"><i class="fa-solid fa-syringe"></i> Blood Bank</a>
    <a href="{{ route('dermatology') }}" class="serv"><i class="fa-solid fa-square-plus"></i> Dermatology</a>
    <a href="{{ route('orthopedic') }}" class="serv"><i class="fa-solid fa-square-plus"></i> Orthopedic</a>
</div>

<script>

    let list = document.querySelectorAll('.serv');
    list.forEach((item) => {
        if (item.href === location.href){
            item.classList.add("active");
        }
    });

</script>
