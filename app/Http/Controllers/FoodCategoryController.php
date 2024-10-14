<?php

namespace App\Http\Controllers;

use App\Models\FoodCategory; // Import the model
use App\DataTables\FoodCategoryDataTable; // Import the DataTable
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class FoodCategoryController extends Controller
{
    // Display a listing of the resource
    public function index(FoodCategoryDataTable $dataTable)
    {
        $data['title'] = 'Food Category';
        addVendors(['datatable', 'tinyMCE', 'jquery-validate']);
        return $dataTable->render('admin.food-categories.index', $data); // Use $dataTable instead of $datatable
    }

    // Show the form for creating a new resource
    public function create()
    {
        $html = view('admin.food-categories.create')->render();
        return response()->json(['success' => 200, 'html' => $html]);
    }

    // Show the form for editing the specified resource
    public function edit(FoodCategory $foodCategory)
    {
        // Pass the foodCategory to the view
        $html = view('admin.food-categories.edit', compact('foodCategory'))->render();
        return response()->json(['success' => 200, 'html' => $html]);
    }

    // Store a new food category
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'created_on' => 'required|date',
            'created_by' => 'required|string|max:255',
        ]);

        // Create a new food category
        FoodCategory::create($request->only('name', 'created_on', 'created_by'));

        return redirect()->route('food-categories.index')->with('success', 'Category created successfully.');
    }

    // Update an existing food category
    public function update(Request $request, FoodCategory $foodCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'created_on' => 'required|date',
            'created_by' => 'required|string|max:255',
        ]);

        // Update the food category
        $foodCategory->update($request->only('name', 'created_on', 'created_by'));

        return redirect()->route('food-categories.index')->with('success', 'Category updated successfully.');
    }

    // Remove the specified resource from storage
    public function destroy(FoodCategory $foodCategory)
    {
        $foodCategory->delete();
        // return response()->json(["status" => 200, "message" => "Category deleted successfully."]);
        return redirect()->route('food-categories.index')->with('success', 'Category deleted successfully.');
    }

}
