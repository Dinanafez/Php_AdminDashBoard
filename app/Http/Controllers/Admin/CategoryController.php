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
        // Validate the incoming data
        $validatedData = $request->validate([
            'catName' => 'required|max:255',         // Category name should not exceed 255 characters
            'catDescription' => 'required|max:255',  // Category description should not exceed 255 characters
        ]);

        // Create the new category
        Category::create($validatedData);

        // Redirect back with success message
        return back()->with('status','added Successfuly');
    }

    // Show the form to edit an existing category
    public function edit(Category $category)
    {
        // Find the category by ID or throw 404 error if not found

        return view('admin.category.edit', compact('category'));
    }
    public function show(Category $category)
    {
        //
    }
    // Update an existing category
    public function update(Request $request, Category $category)
    {
        // Validate the incoming data
        $validatedData=$request->validate([
            'catName' => 'required|max:255',
            'catDescription' => 'required|max:255'
        ]);

       
        $category->update($validatedData);

        // Redirect back with success message
        return back()->with('status', 'Category updated successfully');
    }

    // Delete a category
    public function destroy(Category $category)
    {
        // Find the category by ID or throw 404 error

        // Delete the category
        $category->delete();

        // Redirect back with success message
        return back()->with('status','deleted  Successfuly');
    }
    public function forceDelete($id)
    {
        $contact_us = Contact_us::withTrashed()->findOrFail($id);
        $contact_us->forceDelete(); // Permanently delete the record
        return back()->with('success', 'Contact permanently deleted!');
    }
}
