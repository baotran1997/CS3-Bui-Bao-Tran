@extends('website.layout.core.master')

@section('title', 'Cart')

@section('content')

    <div class="container">
        <div class="continueShopping">
        <a  href="#" onclick="window.history.go(-1)"><i class="fas fa-hand-point-left"></i> CONTINUE SHOPPING</a>
        </div>
        @if(session('cart'))
        <div class="table-responsive addToCart">
            <table class="table">
                <thead >
                <tr>
                    <th scope="col" style="text-align: center;">Item</th>
                    <th scope="col"></th>
                    <th scope="col">Price Each</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($cart->items as $item)
                <tr>
                    <th scope="row"><img src="{{  asset('storage/' . substr($item['product']->image,7)) }}" style="height: 200px;" alt=""></th>
                    <td> {{ $item['product']->name }}</td>
                    <td class="price">$ {{ $item['product']->price }}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('cart.decreaseCart',$item['product']->id ) }}" class="changeQuantity">-</a>
                            <input type="text" class="inputQuantity" value="{{$item['totalQty']}}">
                            <a href="{{ route('cart.addToCart', $item['product']->id) }}" class="changeQuantity">+</a>
                        </div>
                    </td>
                    <td class="price"> $ {{ $item['totalPrice'] }}</td>
                    <td><a class="trash" href="{{ route('cart.removeByOne', $item['product']->id) }}"> <i class="fas fa-trash-alt"></i></a></td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="2"></td>
                    <td class="total" colspan="2">Subtotal:</td>
                    <td class="price" colspan="2">$ {{ $cart->totalPrice }}</td>
                </tr>
                <tr>

                    <td colspan="1"><a href="{{ route('cart.removeAll') }}">Remove All</a></td>
                    <td colspan="3">
                    </td>

                    <td colspan="2" class="section-btn">
                        <a class="custom-btn" href=" {{ route('cart.formCheckOut') }}">
                            <span class="button-text"> Check Out</span>
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        @else
            <div class="container cartEmpty">
                <img src="{{ asset('image/banner/cartEmpty.png') }}" alt="cartEmpty">
            </div>
        @endif

    </div>

@endsection
