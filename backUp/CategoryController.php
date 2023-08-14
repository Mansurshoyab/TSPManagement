<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        // $category = Category::all();
        // return view('course_cat', ['categories' => $category]);
        return view('pages.category.index')->with('categories', Category::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(StoreCategoryRequest $request)
    // {
    //     //
    // }

    public function store(Request $request)
    {
        // dd($request);
        Category::create($request->all());
        return redirect('course_cat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        dd($category);
        return view('pages.category.show')->with('categories', $category);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}