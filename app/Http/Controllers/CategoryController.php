<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
    public function store(StoreCategoryRequest $request)
    {
        Category::create($request->all());
        return redirect('course_cat');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // dd($id);
        $category = Category::find($id);
        return view('pages.category.show')->with('categories', $category);
    }

    /*
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // dd($id);
        $categories = Category::find($id);
        return view('pages.category.edit')->with('categories', $categories);
        
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(UpdateCategoryRequest $request, Category $category)
    // {
    //     //
    // }

    public function update($id)
    {
        $category = Category::find($id);
        $category->name = $category->name;
        $category->description = $category->description;
        if ($category->save()) {
            return redirect("category")->with("info", "Successfully Updated category, ID: " . $category->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if ($category->delete()) {
            return redirect("category")->with("info", "Successfully Deleted category, ID: " . $category->id);
        }
    }
}
