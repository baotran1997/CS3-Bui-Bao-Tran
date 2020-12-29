<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('admin.category.list', compact('categories'));
    }

    public function create() {
        return view('admin.category.create');
    }

    public function store(CreateCategory $request) {
        $category = new Category();
        $category->name = $request->input('name');

        $category->save();

        return redirect()->route('categories.index');
    }

    public function edit($id) {
        $category = Category::findOrFail($id);

        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id) {
        $category = Category::findOrFail($id);

        $category->name = $request->input('name');
        $category->save();

        return redirect()->route('categories.index');
    }

    public function delete($id) {
        $category = Category::findOrFail($id);

        $category->delete();

        return redirect()->route('categories.index')->with("record_deleted", 'Delete successfully');
    }
}
