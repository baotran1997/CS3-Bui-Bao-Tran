@extends('admin.layout.master')
@section('title', 'Edit Book')

@section('content')
    <form class="col-md-8" action="{{ route('books.update', $book->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <h2 style="text-align: center">Edit Book:</h2>
        <div class="form-group ">
            <label for="name">Book Name:</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Enter Book Name" value="{{ $book->name }}">
            @error('name')
            <div style="color: red">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="category_id">Category:</label>
                <select name="category_id" class="form-control custom-select" >
                    @foreach($categories as $category)
                        <option
                            @if($category->id == $book->category_id)
                            selected
                            @endif
                            value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="author_id">Author:</label>
                <select name="author_id" class="form-control custom-select" >
                    @foreach($authors as $author)
                        <option
                            @if($author->id == $book->author_id)
                            selected
                            @endif
                            value="{{$author->id}}">{{$author->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="price">Price:</label>
                <input name="price" type="text" class="form-control" id="price" placeholder="Enter Price" value="{{ $book->price }}">
                @error('price')
                <div style="color: red">{{ $message }}</div>
                @enderror

            </div>
            <div class="form-group col-md-6">
                <label for="isbn">ISBN:</label>
                <input name="isbn" type="text" class="form-control" id="isbn" placeholder="Enter ISBN" value="{{ $book->isbn }}">
                @error('isbn')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inStock">InStock:</label>
                <input name="inStock" type="text" class="form-control" id="inStock"  value="{{ $book->inStock }}">
                @error('inStock')
                <div style="color: red">{{ $message }}</div>
                @enderror

            </div>
            <div class="form-group col-md-6">
                <label for="sold">Sold:</label>
                <input name="sold" type="text" class="form-control" id="sold"  value="{{ $book->sold }}">
                @error('sold')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group ">
            <label for="image">Image:</label>
            <input name="image" type="file" class="form-control-file" id="image">
            @error('image')
            <div style="color: red">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control ckeditor" id="ckeditor" rows="2" >{!! $book->description !!}</textarea>
            @error('description')
            <div style="color: red">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success"><i class="far fa-plus-square"></i> Edit</button>
            <a href="{{route('books.index')}}" class="btn btn-secondary"><i class="fas fa-window-close"></i> Cancel </a>
        </div>
    </form>
@endsection



