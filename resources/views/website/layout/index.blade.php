<!doctype html>
<html lang="en">
<head>
    <title>Tran's Store</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- main css   --}}
    <link rel="stylesheet" href="{{ asset('website/css/my.css') }}">
    {{-- fontawesome   --}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
          integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
          crossorigin="anonymous"/>
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
          integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
          crossorigin="anonymous"/>
</head>
<body>

{{-- start navbar--}}
@include('website.layout.core.navbar')


{{--Start Image Slider--}}
@include('website.layout.core.slider')

{{-- search box--}}
<div class="container col-md-8 search-box">
    <form action="{{ route('book.search') }}" method="post">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for books by keyword / title / ISBN" name="search">
            <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>
</div>

{{--start nav tabs--}}
<div class="container showBestSeller">
    <h1>Best Seller of the month</h1>
    <ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="romance-tab" data-toggle="tab" href="#romance" role="tab"
               aria-controls="romance" aria-selected="true">Romance</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" id="computing-tab" data-toggle="tab" href="#computing" role="tab"
               aria-controls="computing" aria-selected="false">Computing</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" id="children-tab" data-toggle="tab" href="#children" role="tab" aria-controls="children"
               aria-selected="false">Children's Books</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" id="crime-tab" data-toggle="tab" href="#crime" role="tab" aria-controls="crime"
               aria-selected="false">Crime & Thriller </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" id="fiction-tab" data-toggle="tab" href="#fiction" role="tab" aria-controls="fiction"
               aria-selected="false">Fiction</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" id="business-tab" data-toggle="tab" href="#business" role="tab" aria-controls="business"
               aria-selected="false">Business</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        {{--    Start Romance   --}}
        <div class="tab-pane fade show active" id="romance" role="tabpanel" aria-labelledby="romance-tab">
            <div class="container">
                <div class="row">

                    {{-- product    --}}
                    @foreach($romanceBooks as $romanceBook)
                    <div class="col-lg-3 col-md-6 col-sm-6 custom-bestSeller">
                        <div class="product-top">
                            <a href="{{ route('home.bookDetail', $romanceBook->id) }}"><img src="{{ asset('storage/' . substr($romanceBook->image,7)) }}" alt=""></a>
                            <div class="overlay">
                                <a href="{{ route('home.bookDetail', $romanceBook->id) }}" class="btn btn-secondary" title="Quick Shop"><i
                                        class="fas fa-eye"></i></a>
                                <a href="{{ route('cart.addToCart', $romanceBook->id) }}" class="btn btn-secondary" title="Add To Cart"><i
                                        class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="product-bottom text-center">
                            <h3>{{ $romanceBook->name }}</h3>
                            <h5>$ {{ $romanceBook->price }}</h5>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
        {{--    End Romance   --}}

        {{--    Start Computing  --}}
        <div class="tab-pane fade" id="computing" role="tabpanel" aria-labelledby="computing-tab">
            <div class="container">
                <div class="row">

                    {{-- product    --}}
                    @foreach($computingBooks as $computingBook)
                        <div class="col-lg-3 col-md-6 col-sm-6 custom-bestSeller">
                            <div class="product-top">
                                <a href="{{ route('home.bookDetail', $computingBook->id) }}"><img src="{{ asset('storage/' . substr($computingBook->image,7)) }}" alt=""></a>
                                <div class="overlay">
                                    <a href="{{ route('home.bookDetail', $computingBook->id) }}" class="btn btn-secondary" title="Quick Shop"><i
                                            class="fas fa-eye"></i></a>
                                    <a href="{{ route('cart.addToCart', $computingBook->id) }}" class="btn btn-secondary" title="Add To Cart"><i
                                            class="fas fa-shopping-cart"></i></a>
                                </div>
                            </div>
                            <div class="product-bottom text-center">
                                <h3>{{ $computingBook->name }}</h3>
                                <h5>$ {{ $computingBook->price }}</h5>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        {{--    End Computing   --}}

        {{--    Start Chidren Book   --}}
        <div class="tab-pane fade" id="children" role="tabpanel" aria-labelledby="children-tab">
            <div class="container">
                <div class="row">
                    {{-- product    --}}
                    @foreach($childrenBooks as $childrenBook)
                        <div class="col-lg-3 col-md-6 col-sm-6 custom-bestSeller">
                            <div class="product-top">
                                <a href="{{ route('home.bookDetail', $childrenBook->id) }}"><img src="{{ asset('storage/' . substr($childrenBook->image,7)) }}" alt=""></a>
                                <div class="overlay">
                                    <a href="{{ route('home.bookDetail', $childrenBook->id) }}" class="btn btn-secondary" title="Quick Shop"><i
                                            class="fas fa-eye"></i></a>
                                    <a href="{{ route('cart.addToCart', $childrenBook->id) }}" class="btn btn-secondary" title="Add To Cart"><i
                                            class="fas fa-shopping-cart"></i></a>
                                </div>
                            </div>
                            <div class="product-bottom text-center">
                                <h3>{{ $childrenBook->name }}</h3>
                                <h5>$ {{ $childrenBook->price }}</h5>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        {{--    End Chirden Book   --}}

        {{--    Start Crime-Thriller Book   --}}
        <div class="tab-pane fade" id="crime" role="tabpanel" aria-labelledby="crime-tab">
            <div class="container">
                <div class="row">
                    {{-- product    --}}
                    @foreach($crimeBooks as $crimeBook)
                        <div class="col-lg-3 col-md-6 col-sm-6 custom-bestSeller">
                            <div class="product-top">
                                <a href="{{ route('home.bookDetail', $crimeBook->id) }}"><img src="{{ asset('storage/' . substr($crimeBook->image,7)) }}" alt=""></a>
                                <div class="overlay">
                                    <a href="{{ route('home.bookDetail', $crimeBook->id) }}" class="btn btn-secondary" title="Quick Shop"><i
                                            class="fas fa-eye"></i></a>
                                    <a href="{{ route('cart.addToCart', $crimeBook->id) }}" class="btn btn-secondary" title="Add To Cart"><i
                                            class="fas fa-shopping-cart"></i></a>
                                </div>
                            </div>
                            <div class="product-bottom text-center">
                                <h3>{{ $crimeBook->name }}</h3>
                                <h5>$ {{ $crimeBook->price }}</h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{--    End  Crime-Thriller Book   --}}

        {{--    Start Fiction Book   --}}
        <div class="tab-pane fade" id="fiction" role="tabpanel" aria-labelledby="fiction-tab">
            <div class="container">
                <div class="row">
                    {{-- product    --}}
                    @foreach($fictionBooks as $fictionBook)
                        <div class="col-lg-3 col-md-6 col-sm-6 custom-bestSeller">
                            <div class="product-top">
                                <a href="{{ route('home.bookDetail', $fictionBook->id) }}"><img src="{{ asset('storage/' . substr($fictionBook->image,7)) }}" alt=""></a>
                                <div class="overlay">
                                    <a href="{{ route('home.bookDetail', $fictionBook->id) }}" class="btn btn-secondary" title="Quick Shop"><i
                                            class="fas fa-eye"></i></a>
                                    <a href="{{ route('cart.addToCart', $fictionBook->id) }}" class="btn btn-secondary" title="Add To Cart"><i
                                            class="fas fa-shopping-cart"></i></a>
                                </div>
                            </div>
                            <div class="product-bottom text-center">
                                <h3>{{ $fictionBook->name }}</h3>
                                <h5>$ {{ $fictionBook->price }}</h5>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        {{--    End Fiction Book   --}}

        {{--    Start Business Book   --}}
        <div class="tab-pane fade" id="business" role="tabpanel" aria-labelledby="business-tab">
            <div class="container">
                <div class="row">
                    {{-- product    --}}
                    @foreach($businessBooks as $businessBook)
                        <div class="col-lg-3 col-md-6 col-sm-6 custom-bestSeller">
                            <div class="product-top">
                                <a href="{{ route('home.bookDetail', $businessBook->id) }}"><img src="{{ asset('storage/' . substr($businessBook->image,7)) }}" alt=""></a>
                                <div class="overlay">
                                    <a href="{{ route('home.bookDetail', $businessBook->id) }}" class="btn btn-secondary" title="Quick Shop"><i
                                            class="fas fa-eye"></i></a>
                                    <a href="{{ route('cart.addToCart', $businessBook->id) }}" class="btn btn-secondary" title="Add To Cart"><i
                                            class="fas fa-shopping-cart"></i></a>
                                </div>
                            </div>
                            <div class="product-bottom text-center">
                                <h3>{{ $businessBook->name }}</h3>
                                <h5>$ {{ $businessBook->price }}</h5>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
        {{--    End Business Book    --}}

    </div>
</div>


{{--start Testimonials--}}
@include('website.layout.core.testimonial')

{{-- start service --}}
@include('website.layout.core.service')


{{--Start footer--}}
@include('website.layout.core.footer')




<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>

{{--main js--}}
<script src="{{ asset('website/js/js.js') }}"></script>
{{-- toars--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous"></script>
<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "500",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
</script>
@if(\Illuminate\Support\Facades\Session::has('error'))
    <script>
        toastr["error"]("{!! Session::get('error') !!}", "Error")
    </script>
@endif
@if(\Illuminate\Support\Facades\Session::has('success'))
    <script>
        toastr["success"]("{!! Session::get('success') !!}", "Success")
    </script>
@endif
@if(\Illuminate\Support\Facades\Session::has('info'))
    <script>
        toastr["info"]("{!! Session::get('info') !!}", "Info")
    </script>
@endif

@yield('js')

@if(\Illuminate\Support\Facades\Session::has('record_deleted'))
    <script>
        toastr.error("{!! Session::get('record_deleted') !!}")
    </script>
@endif
</body>
</html>
