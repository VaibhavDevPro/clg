<?php

namespace App\Http\Controllers;

use App\Models\FoodCategory; // Make sure to import the FoodCategory model
use Illuminate\Http\Request;
use App\DataTables\FoodCategoryDataTable;

class FoodCategoryController extends Controller
{
    // Display a listing of the resource
    public function index(FoodCategoryDataTable $datatable)
    {
        $categories = FoodCategory::all(); // Fetch all categories
        // return view('food-categories.index', compact('categories')); // Return the view
        // return $dataTable->render(''); // Make sure the view exists

        $data['title'] = 'Food Category';
        addVendors(['datatable', 'tinyMCE', 'jquery-validate']);
        return $datatable->render('food-categories.index', $data);
    }

    // Show the form for creating a new resource
    public function create()
    {
        return view('food-categories.create'); // Return the create view
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255', // Validate the input
        ]);

        FoodCategory::create($request->only('name')); // Create the category

        return redirect()->route('food-categories.index')->with('success', 'Category created successfully.'); // Redirect with success message
    }

    // Display the specified resource
    public function show(FoodCategory $foodCategory)
    {
        return view('food-categories.show', compact('foodCategory')); // Return the show view
    }

    // Show the form for editing the specified resource
    public function edit(FoodCategory $foodCategory)
    {
        return view('food-categories.edit', compact('foodCategory')); // Return the edit view
    }

    // Update the specified resource in storage
    public function update(Request $request, FoodCategory $foodCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255', // Validate the input
        ]);

        $foodCategory->update($request->only('name')); // Update the category

        return redirect()->route('food-categories.index')->with('success', 'Category updated successfully.'); // Redirect with success message
    }

    // Remove the specified resource from storage
    public function destroy(FoodCategory $foodCategory)
    {
        $foodCategory->delete(); // Delete the category

        return redirect()->route('food-categories.index')->with('success', 'Category deleted successfully.'); // Redirect with success message
    }
}
