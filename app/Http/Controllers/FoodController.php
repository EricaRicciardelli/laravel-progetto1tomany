<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\FoodEditRequest;
use App\Http\Requests\FoodCreateRequest;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class FoodController extends Controller implements HasMiddleware
{

    public static function middleware(){
        return [
            new Middleware('auth', except:['index']),
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foods = Food::all();
        return view('food.index', compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('food.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FoodCreateRequest $request)
    {
        Food::create([
            "name"=>$request->nome,
            "description"=>$request->descrizione,
            "img"=>$request->file('immagine')->store('public/media'),
            "category_id"=>$request->category_id,
        ]);
        return redirect(route('food.index'))->with('success', 'Ricetta pubblicata con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Food $food)
    {
        return view('food.show', compact('food'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Food $food)
    {
        return view('food.edit', compact('food'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FoodEditRequest $request, Food $food)
    {
        $food->update([
            "name"=>$request->nome,
            "description"=>$request->descrizione,
            "img"=>$request->immagine ? $request->file('immagine')->store('public/media') : $food->img,
        ]);
        return redirect(route('food.index'))->with('success', 'Ricetta modificata con successo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Food $food)
    {
        $food->delete();
        return redirect(route('food.index'))->with('success', 'Ricetta eliminata con successo');
    }

    public function foods(Category $category){
       $foods = $category->foods;
       return view('category.foods', compact('foods'));
    }
}
