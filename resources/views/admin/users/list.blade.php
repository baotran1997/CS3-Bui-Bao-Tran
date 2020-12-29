@extends('admin.layout.master')

@section('title', 'Users List')

@section('content')

    <div class="card">
        <div class="card-header"> DataTables
            <div class="card-header-actions">
                @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1)
                    <a href="{{ route('users.create') }}" class="btn btn-success">+ Add New User</a>
                @endif
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered datatable" id="myTable">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Image</th>
                    <th>Role</th>
                    <th>Phone</th>
                    @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1)
                    <th>Actions</th>
                    @endif
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{ $user->username }}</td>
                        <td><img style="width: 100px" src="{{ asset('storage/' . substr($user->image,7)) }}" alt="image_user"></td>
                        <td ><span class="badge {{$user->role->id==App\Models\RoleConstant::ROLE_ADMIN ? "badge-success" : "badge-info"}}">{{ $user->role->name  }} </span></td>
                        <td>{{$user->phone}}</td>
                        @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1)
                        <td><a class="btn btn-success" href="{{ route('users.profile', $user->id) }}">
                                <svg class="c-icon">
                                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass') }}"></use>
                                </svg></a><a class="btn btn-info" href="{{ route('users.edit', $user->id) }}">
                                <svg class="c-icon">
                                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-description') }}"></use>
                                </svg></a><a class="btn btn-danger" href="{{ route('users.delete', $user->id) }} " onclick="return confirm('Are you sure to delete this user?')">
                                <svg class="c-icon">
                                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-trash') }}"></use>
                                </svg></a>
                        </td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection


