@extends('admin.layout.master')
@section('title', 'Book List')

@section('content')

<div class="card">
    <div class="card-header"> DataTables
        <div class="card-header-actions">
            @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1 || \Illuminate\Support\Facades\Auth::user()->role_id == 2)

            <a href="{{ route('books.create') }}" class="btn btn-success">+ Add New Book</a>
            @endif
        </div>
    </div>
    <div class="card-body">
        <table class="table table-striped table-bordered datatable"  id="myTable">
            <thead>
            <tr style="text-align: center">
                <th>No.</th>
                <th>Name</th>
                <th>ISBN</th>
                <th>Image</th>
                <th>Price</th>
                <th>InStock</th>
                <th>Sold</th>
                @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1 || \Illuminate\Support\Facades\Auth::user()->role_id == 2)
                <th>Actions</th>
                @endif
            </tr>
            </thead>
            <tbody style="text-align: center">
            @foreach($books as $key => $book)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{$book->name}}</td>
                <td>{{$book->isbn}}</td>
                <td><img style="width: 100px" src="{{ asset('storage/' . substr($book->image,7)) }}" alt="image_user">
                </td>
                <td>{{$book->price}} $</td>
                <td>{{$book->inStock}} items</td>
                <td>{{$book->sold}} items</td>

                @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1 || \Illuminate\Support\Facades\Auth::user()->role_id == 2)

                <td>
                    <a class="btn btn-success" href="{{ route('books.detail', $book->id) }}">
                        <svg class="c-icon">
                            <use
                                xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass') }}"></use>
                        </svg>
                    </a>



                    <a class="btn btn-danger" href="{{ route('books.delete', $book->id) }}"
                       onclick="return confirm('Are you sure to delete this book?')">
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

