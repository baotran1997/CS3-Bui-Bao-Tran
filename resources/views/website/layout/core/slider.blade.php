
<div class="container">
<div id="carouselExampleIndicators" class="carousel slide custom-carousel" data-ride="carousel" data-interval="7000">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        {{-- slider1 --}}
        <div class="carousel-item active custom-item" style="background-image: url({{ asset('image/banner/banner7.jpg') }})">

        </div>

        {{-- slider1 --}}
        <div class="carousel-item custom-item" style="background-image: url({{ asset('image/banner/banner5.jpg') }})">

        </div>
        <div class="carousel-item custom-item" style="background-image: url({{ asset('image/banner/banner44.jpg') }})">

        </div>
    </div>
    {{-- previous & next btn   --}}
    <a class="carousel-control-prev" href="#carouselExampleIndicators" data-slide="prev">
        <span class="carousel-control-prev-icon"><i class="fas fa-arrow-circle-left"></i></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" data-slide="next">
        <span class="carousel-control-next-icon"><i class="fas fa-arrow-circle-right"></i></span>
    </a>
</div>
</div>
