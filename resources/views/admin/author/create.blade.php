@extends('admin.layout.master')
@section('title', 'Create New Author')

@section('content')
    <form class="col-md-8" action="" method="post">
        @csrf
        <h2 style="text-align: center">Add New Author:</h2>
        <div class="form-group ">
            <label for="name">Category:</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Enter Author" required>
            @error('name')
            <div style="color: red">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success"><i class="far fa-plus-square"></i> Create</button>
            <a href="{{ route('authors.index') }}" class="btn btn-secondary"><i class="fas fa-window-close"></i> Cancel </a>
        </div>
    </form>
@endsection

