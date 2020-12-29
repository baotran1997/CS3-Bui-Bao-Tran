@extends('website.layout.core.master')

@section('title', 'Book Detail')

@section('content')
    <div class="container bookDetail">
        <div class="row justify-content-center">
            <div class="col-lg-6 img">
                <img src="{{  asset('storage/' . substr($book->image,7)) }}" alt="">
            </div>
            <div class="col-lg-6">
                <table class="table">
                    <thead>
                         <tr>
                             <th colspan="2">{{ $book->name}}</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="priceProductDetail" colspan="2">
                            <span class="bookInfo"> Price: </span> ${{ $book->price }}
                        </td>
                    </tr>
                    <tr>
                        <td class="textProductDetail" colspan="2">
                            <span class="bookInfo"> ISBN: </span> {{ $book->isbn }}
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <span class="bookInfo"> By: </span> {{ $book->author->name }}

                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <span class="bookInfo"> Category: </span> {{ $book->category->name }}

                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">

                            <ul class="shareBook">
                                <span class="bookInfo"> Share: </span>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                             </ul>
                        </td>
                    </tr>
                    </tbody>

                    <tfoot>
                    <tr>
                        <td class="section-btn">
                            <a class="custom-btn" href=" {{ route('cart.addToCart', $book->id)}}">
                                <span class="button-text"> ADD TO CART</span>
                            </a>
                        </td>
                    </tr>
                    </tfoot>
                </table>

            </div>
        </div>

        <div class="row bookDescription">
            <p class="titleDescription">Book Description:</p>
            <p> {!! $book->description !!}</p>
        </div>
    </div>
@endsection
