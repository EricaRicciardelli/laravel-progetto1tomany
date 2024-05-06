<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/food/create', [FoodController::class, 'create'])->name('food.create');
Route::post('/food/store', [FoodController::class, 'store'])->name('food.store');
Route::get('/food/index', [FoodController::class, 'index'])->name('food.index');
Route::get('/food/show/{food}', [FoodController::class, 'show'])->name('food.show');
Route::get('/food/edit/{food}', [FoodController::class, 'edit'])->name('food.edit');
Route::put('/food/update/{food}', [FoodController::class, 'update'])->name('food.update');
Route::delete('/food/delete/{food}', [FoodController::class, 'destroy'])->name('food.destroy');

Route::get('/food/category/{category}', [FoodController::class, 'foods'])->name('category.foods');
