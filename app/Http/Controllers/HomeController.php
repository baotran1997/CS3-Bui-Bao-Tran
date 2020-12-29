<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {



        $romanceBooks = Book::where('category_id', 1)
                        ->orderByDesc('sold')
                        ->take(8)
                        ->get();


        $fictionBooks = Book::where('category_id', 2)
            ->orderByDesc('sold')
            ->take(8)
            ->get();

        $crimeBooks = Book::where('category_id', 3)
            ->orderByDesc('sold')
            ->take(8)
            ->get();

        $computingBooks = Book::where('category_id', 4)
            ->orderByDesc('sold')
            ->take(8)
            ->get();

        $businessBooks = Book::where('category_id', 5)
            ->orderByDesc('sold')
            ->take(8)
            ->get();

        $childrenBooks = Book::where('category_id', 6)
            ->orderByDesc('sold')
            ->take(8)
            ->get();

        return view('website.layout.index', compact('fictionBooks', 'romanceBooks', 'computingBooks', 'crimeBooks', 'businessBooks', 'childrenBooks'));
    }

    public function showBookByCategory($category_id) {

        $category = Category::findOrFail($category_id);
        $books = Book::where('category_id', $category_id)->get();

        return view('website.layout.showBookByCategory', compact('books', 'category') );
    }



    public function bookDetailById($id) {
        $book = Book::findOrFail($id);

        return view('website.layout.bookDetail', compact('book'));
    }

    public function search(Request  $request) {

        $search = $request->input('search');

        $books = Book::Where('name', 'like', "%$search%")
            ->orWhere('isbn', 'like', "%$search%")->get();


        return view('website.layout.search', compact('books', 'search'));
    }

    public function aboutUs() {
        return view('website.layout.about');
    }
}
