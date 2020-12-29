@extends('website.layout.core.master')

@section('title', 'Show Book')

@section('content')
<div class="imgBookByCategory" style="background-image: url('{{ asset('image/banner/banner4.jpg') }}')" >
    <h2 class="categoryName">
        {{ $category->name }} Books
    </h2>
</div>

{{-- search box--}}
<div class="container col-md-8 search-box">
    <form action="{{ route('book.search') }}" method="post">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for books by keyword / title / author / ISBN" name="search">
            <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>
</div>

    <div class="container showBookByCategory">
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
    </div>
@endsection
