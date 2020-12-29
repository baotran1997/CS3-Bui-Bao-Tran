@extends('admin.layout.master')

@section('title', 'Order Detail')

@section('content')
    <div class="container">
        <a href="{{ route('orders.confirm', $order->id) }}" class="btn btn-success">Confirm Order</a>

        <table class="table mt-3">
        <thead class="thead-dark ">
        <tr>
            <th >Book</th>
            <th >Quantity</th>
            <th >Total Price</th>

        </tr>
        </thead>
        <tbody>

        @foreach($order->books as $book)
        <tr>
            <td>{{ $book->name }}</td>
            <td>{{ $book->pivot->quantity_order }}</td>
            <td>{{ $book->pivot->price_each }}</td>

        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection
