@extends('admin.layout.master')
@section('title', 'Author List')

@section('content')
    <div class="card">
        <div class="card-header"> DataTables
            <div class="card-header-actions">
                @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1 || \Illuminate\Support\Facades\Auth::user()->role_id == 2)

                <a href="{{ route('authors.create') }}" class="btn btn-success">+ Add New Author</a>
                @endif
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered datatable" id="myTable">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Author:</th>
                    @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1 || \Illuminate\Support\Facades\Auth::user()->role_id == 2)
                    <th >Actions</th>
                    @endif
                </tr>
                </thead>
                <tbody >
                @foreach($authors as $key => $author)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{$author->name}}</td>
                        @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1 || \Illuminate\Support\Facades\Auth::user()->role_id == 2)
                        <td>
                            <a class="btn btn-info" href="{{ route('authors.edit', $author->id) }}">
                                <svg class="c-icon">
                                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-description') }}"></use>
                                </svg>
                            </a>

                            <a class="btn btn-danger" href="{{ route('authors.delete', $author->id) }}" onclick="return confirm('Are you sure to delete this author?')">
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

