<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodCategoryController;
use App\Http\Controllers\FoodItemsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/food-categories/index', [FoodCategoryController::class, 'index'])->name('food-categories.index');
    Route::get('/food-categories/create', [FoodCategoryController::class, 'create'])->name('food-categories.create');
    Route::post('/food-categories/store', [FoodCategoryController::class, 'store'])->name('food-categories.store');
    Route::get('/food-categories/edit/{foodCategory}', [FoodCategoryController::class, 'edit'])->name('food-categories.edit');
    Route::get('/food-categories/update/{foodCategory}', [FoodCategoryController::class, 'update'])->name('food-categories.update');
    Route::get('/food-categories/destroy/{foodCategory}', [FoodCategoryController::class, 'destroy'])->name('food-categories.destroy');




Route::get('/food-items/index', [FoodItemsController::class, 'index'])->name('food-items.index');
Route::get('/food-items/create', [FoodItemsController::class, 'create'])->name('food-items.create');
Route::post('/food-items/store', [FoodItemsController::class, 'store'])->name('food-items.store');
Route::get('/food-items/edit/{foodItem}', [FoodItemsController::class, 'edit'])->name('food-items.edit');
Route::put('/food-items/update/{foodItem}', [FoodItemsController::class, 'update'])->name('food-items.update'); // Change to PUT for updates
Route::delete('/food-items/destroy/{foodItem}', [FoodItemsController::class, 'destroy'])->name('food-items.destroy'); // Use DELETE for destroy

});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
