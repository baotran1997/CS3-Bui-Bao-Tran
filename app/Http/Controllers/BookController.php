<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBook;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {

        $books = Book::all();
        $categories = Category::all();
        $authors = Author::all();
        return view('admin.books.list', compact('books', 'categories', 'authors'));
    }

    public function uploadImage($request) {

        $path = null;
        if($request->hasFile('image')) {
            $img = $request->image;
            $path = $img->store('public/books');
        }
        return $path;
    }

    public function create() {
        $categories = Category::all();
        $authors = Author::all();
        return view('admin.books.create', compact('categories', 'authors'));
    }

    public function store(CreateBook $request): \Illuminate\Http\RedirectResponse
    {
        $book = new Book();

        $book->name = $request->input('name');
        $book->category_id = $request->input('category_id');
        $book->author_id = $request->input('author_id');
        $book->price = $request->input('price');
        $book->isbn = $request->input('isbn');
        $book->inStock = $request->input('inStock');
        $book->sold = $request->input('sold');
        $book->description = $request->input('description');
        $book->image = $this->uploadImage($request);

        $book->save();

        return redirect()->route('books.index');
    }

    public function showBookDetail($id) {
        $book = Book::findOrFail($id);
        return view('admin.books.bookDetail', compact('book'));
    }

    public function edit($id) {
        $book = Book::findOrFail($id);
        $categories = Category::all();
        $authors = Author::all();
        return view('admin.books.edit', compact('book', 'categories', 'authors'));
    }

    public function update(Request $request, $id) {
        $categories = Category::all();
        $authors = Author::all();

        $book = Book::findOrFail($id);

        $book->name = $request->input('name');
        $book->category_id = $request->input('category_id');
        $book->author_id = $request->input('author_id');
        $book->price = $request->input('price');
        $book->isbn = $request->input('isbn');
        $book->inStock = $request->input('inStock');
        $book->sold = $request->input('sold');
        $book->description = $request->input('description');

        if($request->hasfile('image')){
            $book->image = $this->uploadImage($request);
        }

        $book->save();
        return redirect()->route('books.detail', compact('categories', 'authors', 'id'));

    }

    public function delete($id){

        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('books.index')->with('record_deleted', 'Delete successfully');
    }

}
