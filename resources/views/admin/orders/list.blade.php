@extends('admin.layout.master')

@section('title', 'Order List')

@section('content')

    <div class="card">
        <div class="card-header"> DataTables
            <div class="card-header-actions">

            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered datatable" id="myTable">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Order Number</th>
                    <th>Customer</th>
                    <th>Order Date</th>
                    <th>Status</th>
                    @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1 || \Illuminate\Support\Facades\Auth::user()->role_id == 4)
                    <th>Action</th>
                    @endif
                </tr>
                </thead>
                <tbody >
                @foreach($orders as $key => $order)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>TR00{{$order->id}}</td>
                        <td>{{$order->customer->name}}</td>
                        <td>{{$order->created_at}}</td>
                        <td>
                            @if($order->status == 1)
                                <span style="border: 1px solid black; background-color: grey; color: white; border-radius: 5px; display: inline-block; padding: 3px 5px; font-weight: bolder">
                                    Waiting
                                </span>
                            @elseif($order->status == 2)
                            <span style="border: 1px solid black; background-color: red; color: white; border-radius: 5px; display: inline-block; padding: 3px 5px; font-weight: bolder">
                                Done
                            </span>
                            @endif
                        </td>
                        @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1 || \Illuminate\Support\Facades\Auth::user()->role_id == 4)

                        <td>
                            <a class="btn btn-info" href="{{ route('orders.detail', $order->id) }}">
                                <svg class="c-icon">
                                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-description') }}"></use>
                                </svg>
                            </a>
                        </td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
