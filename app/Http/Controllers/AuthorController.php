<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAuthor;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index () {
        $authors = Author::all();
        return view('admin.author.list', compact('authors'));
    }

    public function create() {
        return view('admin.author.create');
    }

    public function store(CreateAuthor $request) {
        $author = new Author();
        $author->name = $request->input('name');
        $author->save();

        return redirect()->route('authors.index');
    }

    public function edit($id) {
        $author = Author::findOrFail($id);

        return view('admin.author.edit', compact('author'));
    }

    public function update(Request $request, $id) {
         $author = Author::findOrFail($id);

        $author->name = $request->input('name');
        $author->save();

        return redirect()->route('authors.index');
    }

    public function delete($id) {
        $category = Author::findOrFail($id);

        $category->delete();

        return redirect()->route('authors.index')->with("record_deleted", 'Delete successfully');

    }
}
