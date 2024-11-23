<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // Display all categories
    public function index()
    {
        $categories = Category::all(); // Fetch all categories
        return view('admin.category.index', compact('categories'));
    }

    // Show the form to create a new category
    public function create()
    {
        return view('admin.category.create');
    }

    // Store a new category
    public function store(Request $request)
    {
        $request->validate([
            'catName' => 'required|max:255',
            'catDescription' => 'required|max:255'
        ]);

        Category::create([
            'catName' => $request->catName,
            'catDescription' => $request->catDescription
        ]);

        return redirect()->route('category.index')->with('status', 'Category added successfully');
    }

    // Show the form to edit an existing category
    public function edit($id)
    {
        $category = Category::findOrFail($id); // Find the category by ID or throw 404
        return view('admin.category.edit', compact('category'));
    }

    // Update an existing category
    public function update(Request $request, $id)
    {
        $request->validate([
            'catName' => 'required|max:255',
            'catDescription' => 'required|max:255'
        ]);

        $category = Category::findOrFail($id);
        $category->update([
            'catName' => $request->catName,
            'catDescription' => $request->catDescription
        ]);

        return redirect()->route('category.index')->with('status', 'Category updated successfully');
    }

    // Delete a category
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('category.index')->with('status', 'Category deleted successfully');
    }
}
