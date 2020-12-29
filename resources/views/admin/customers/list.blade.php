@extends('admin.layout.master')

@section('title', 'Customer List')

@section('content')

    <div class="card">
        <div class="card-header"> DataTables
            <div class="card-header-actions">
                @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1 || \Illuminate\Support\Facades\Auth::user()->role_id == 3)

                <a href="{{ route('customers.create') }}" class="btn btn-success">+ Add New Customer</a>
                @endif
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered datatable" id="myTable">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>City</th>
                    @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1 || \Illuminate\Support\Facades\Auth::user()->role_id == 3)
                    <th >Actions</th>
                    @endif
                </tr>
                </thead>
                <tbody >
                @foreach($customers as $key => $customer)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->phone}}</td>
                        <td>{{$customer->email}}</td>
                        <td>{{$customer->address}}</td>
                        <td>{{$customer->city}}</td>
                        @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1 || \Illuminate\Support\Facades\Auth::user()->role_id == 3)

                        <td>
                            <a class="btn btn-info" href="{{ route('customers.edit', $customer->id) }}">
                                <svg class="c-icon">
                                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-description') }}"></use>
                                </svg>
                            </a>

                            <a class="btn btn-danger" href="{{ route('customers.delete', $customer->id) }}" onclick="return confirm('Are you sure to delete this Customer?')">
                                <svg class="c-icon">
                                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-trash') }}"></use>
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
