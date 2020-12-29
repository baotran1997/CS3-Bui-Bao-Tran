@extends('website.layout.core.master')

@section('title', 'Search')

@section('content')

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

    <div class="container showBookByCategory">
        @if(count($books) > 0)
            <h3 class="textSearch"> Search results for "{{ $search }}": <span class="numberSearch">  {{ count($books)}} </span> </h3>
            <div class="row">
                @foreach($books as $book)
                    <div class="col-lg-3 col-md-6 col-sm-6 custom-bestSeller">
                        <div class="product-top">
                            <a href="{{ route('home.bookDetail', $book->id) }}">
                                <img src="{{ asset('storage/' . substr($book->image,7)) }}" alt="">
                            </a>
                            <div class="overlay">
                                <a href="{{ route('home.bookDetail', $book->id) }}" class="btn btn-secondary" title="Quick Shop"><i
                                        class="fas fa-eye"></i></a>
                                <a href="{{route('cart.addToCart', $book->id)}}" class="btn btn-secondary" title="Add To Cart"><i
                                        class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="product-bottom text-center">
                            <h3>{{ $book->name }}</h3>
                            <h5>$ {{ $book->price }}</h5>
                        </div>
                    </div>
                @endforeach

            </div>
        @else
            <h3 class="textSearch1">Search results for "{{ $search }}": <span class="numberSearch">{{ count($books)}}</span>
            </h3>
            <h1 class="iconSearch"><i class="far fa-smile-beam"></i></h1>
        @endif

    </div>

@endsection
