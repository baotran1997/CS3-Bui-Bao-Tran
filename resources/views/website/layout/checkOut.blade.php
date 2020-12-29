@extends('website.layout.core.master')

@section('title', 'Check Out')

@section('content')
    <div class="container">
    <div class="row checkOut">
        <div class="col-lg-7 col-md-6 col-sm-6">
            <div class="container">
                <form action="{{ route('cart.checkOut') }}" method="post">

                    @csrf
                    <div class="row">
                        <div class="col">
                            <h3>Billing Address</h3>
                            <label for="name"><i class="fa fa-user"></i> Full Name</label>
                            @error('name')
                            <div style="color: red">{{ $message }}</div>
                            @enderror
                            <input type="text" id="name" name="name" placeholder="Input Full Name">


                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            @error('email')
                            <div style="color: red">{{ $message }}</div>
                            @enderror

                            <input type="text" id="email" name="email" placeholder="Input Email" >

                            <label for="address"><i class="fa fa-address-card-o"></i> Address</label>
                            @error('address')
                            <div style="color: red">{{ $message }}</div>
                            @enderror
                            <input type="text" id="address" name="address" placeholder="Input Address" >


                            <div class="row">
                                <div class="col-lg-6 ">
                                    <label for="city">City</label>
                                    @error('city')
                                    <div style="color: red">{{ $message }}</div>
                                    @enderror
                                    <input type="text" id="city" name="city" placeholder="Input City">

                                </div>
                                <div class="col-lg-6    ">
                                    <label for="phone">Phone</label>
                                    @error('phone')
                                    <div style="color: red">{{ $message }}</div>
                                    @enderror
                                    <input type="text" id="phone" name="phone" placeholder="Input Phone" >

                                </div>
                            </div>
                        </div>

                    </div>

                    <input type="submit" value="Continue to checkout" class="btn">
                </form>
            </div>
        </div>

        <div class="col-lg-5 col-md-6 col-sm-6 media-cart">
            <div class="container">
                <h4>Cart
                    <span class="price" >
          <i class="fa fa-shopping-cart"></i>
          <b class="checkOut-price">({{ $cart->totalQty }})</b>
        </span>
                </h4>
                <hr>
                @foreach($cart->items as $item)
                <p>
                    <a href="{{ route('home.bookDetail',  $item['product']->id) }}" class="checkOutName"> {{ $item['product']->name }} ({{ $item['totalQty'] }})</a>
                    <span class="price">$ {{ $item['totalPrice'] }}</span>
                </p>
                @endforeach
                <hr>
                <p class="checkOutName">Total <span class="price" ><b class="checkOut-price">$ {{ $cart->totalPrice }}</b></span></p>
            </div>
        </div>
    </div>
    </div>
@endsection
