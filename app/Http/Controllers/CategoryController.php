<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index() {
        $category = Category::get();
        return view('category.index', compact('category'));
    }

    function create() {
        return view('category.create');
    }

    function submit(Request $request) {
        $category = new Category();
        $category->category = $request->category;
        $category->save();

        return redirect()->route('index');
    }

    function edit($id) {
        $category = Category::find($id);
        return view('category.edit', compact('category'));
    }

    function update(Request $request, $id) {
        $category = Category::find($id);
        $category->category = $request->category;
        $category->update();

        return redirect()->route('index');
    }

    function delete($id) {
        $category =Category::find($id);
        $category->delete();
        return redirect()->route('index');
    }
}
