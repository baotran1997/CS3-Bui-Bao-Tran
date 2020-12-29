@extends('admin.layout.master')

@section('title', 'Edit Customer')

@section('content')

    <form class="col-md-8" action="" method="post" >
        @csrf
        <h2 style="text-align: center">Edit Customer:</h2>
        <div class="form-group ">
            <label for="name">Full Name:</label>
            <input name="name" type="text" class="form-control" id="name" value="{{ $customer->name }}">

        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="phone">Phone:</label>
                <input name="phone" type="text" class="form-control  " id="phone" value="{{ $customer->phone }}">

            </div>
            <div class="form-group col-md-6">
                <label for="email">Email:</label>
                <input name="email" type="email" class="form-control" id="email" value="{{ $customer->email }}">

            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="address">Address:</label>
                <input name="address" type="text" class="form-control" id="address" value="{{ $customer->address }}">
            </div>
            <div class="form-group col-md-6">
                <label for="city">City:</label>
                <input name="city" type="text" class="form-control" id="city" value="{{ $customer->city }}">

            </div>
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-success"><i class="far fa-plus-square"></i> Edit</button>
            <a href="{{route('customers.index')}}" class="btn btn-secondary"><i class="fas fa-window-close"></i> Cancel </a>
        </div>
    </form>
@endsection
