@extends('admin.layout.master')
@section('title', 'Categories List')

@section('content')
    <div class="card">
        <div class="card-header"> DataTables
            <div class="card-header-actions">
                @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1 || \Illuminate\Support\Facades\Auth::user()->role_id == 2)
                <a href="{{ route('categories.create') }}" class="btn btn-success">+ Add New Category</a>
                @endif
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered datatable" id="myTable">
                <thead>
                <tr style="text-align: center">
                    <th>No.</th>
                    <th>Category Name</th>
                    @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1 || \Illuminate\Support\Facades\Auth::user()->role_id == 2)
                    <th >Actions</th>
                    @endif
                </tr>
                </thead>
                <tbody style="text-align: center">
                @foreach($categories as $key => $category)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{$category->name}}</td>
                        @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1 || \Illuminate\Support\Facades\Auth::user()->role_id == 2)

                        <td>
                            <a class="btn btn-info" href="{{ route('categories.edit', $category->id) }}">
                                <svg class="c-icon">
                                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-description') }}"></use>
                                </svg>
                            </a>

                            <a class="btn btn-danger" href="{{ route('categories.delete', $category->id) }}" onclick="return confirm('Are you sure to delete this category?')">
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

