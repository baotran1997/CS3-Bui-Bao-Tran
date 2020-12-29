@extends('admin.layout.master')

@section('title', 'Edit User');

@section('content')

    <form class="col-md-8" action="{{ route('users.update', $user->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <h2 style="text-align: center">Edit User:</h2>
        <div class="form-group ">
            <label for="name">Full Name:</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Enter Full Name" value="{{ $user->name }}">

        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="username">Username:</label>
                <input name="username" type="text" class="form-control  " id="username" placeholder="Enter Username" value="{{ $user->username }}">

            </div>
            <div class="form-group col-md-6">
                <label for="username">Phone Number:</label>
                <input name="phone" type="text" class="form-control" id="phone" placeholder="Enter Username" value="{{ $user->phone }}">

            </div>

        </div>
        <div class="form-group">
            <label for="inputStatus">Role:</label>
            <select name="role_id" class="form-control custom-select" >
                @foreach($roles as $role)
                    <option
                        @if($role->id == $user->role_id)
                        selected
                        @endif
                        value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-row ">
            <label for="image">Image:</label>
            <img style="width: 100px" src="{{ asset('storage/' . substr($user->image,7)) }}" alt="image_user">
            <input name="image" type="file" class="form-control-file" id="image" >
        </div>

        <div class="form-group ">
            <label for="email">Email address:</label>
            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{ $user->email }}">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Edit</button>
            <a href="{{route('users.index')}}" class="btn btn-secondary"><i class="fas fa-window-close"></i> Cancel </a>
        </div>
    </form>

@endsection
