@extends('admin.layout.master')
@section('title', 'Add New User')

@section('content')

    <form class="col-md-8" action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <h2 style="text-align: center">Add New User:</h2>
        <div class="form-group ">
            <label for="name">Full Name:</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Enter Full Name" required>
            @error('name')
            <div style="color: red">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="username">Username:</label>
                <input name="username" type="text" class="form-control  " id="username" placeholder="Enter Username" required>
                @error('username')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="password">Password:</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="Enter Password" required>
                @error('password')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputStatus">Role:</label>
                <select name="role_id" class="form-control custom-select">
                    @foreach($roles as $role)
                        <option
                            value="{{$role->id}}">{{$role->name}}</option>
                    @endforeach
                </select>
                @error('role_id')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="phone">Phone Number:</label>
                <input name="phone" type="text" class="form-control" id="phone" placeholder="Enter Phone Number" required>
                @error('phone')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group ">
            <label for="email">Email address:</label>
            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            @error('email')
            <div style="color: red">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group ">
            <label for="image">Image:</label>
            <input name="image" type="file" class="form-control-file" id="image">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success"><i class="far fa-plus-square"></i> Create</button>
            <a href="{{route('users.index')}}" class="btn btn-secondary"><i class="fas fa-window-close"></i> Cancel </a>
        </div>
    </form>
@endsection
