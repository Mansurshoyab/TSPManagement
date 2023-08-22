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

        return view('pages.category.index')->with(['categories' => Category::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.category.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(StoreCategoryRequest $request)
    // {
    //     $this->validate($request, [
    //         'name' => "required|string|unique:categories,name",
    //         'description' => "required|min:10|max:255"
    //     ],[
    //         'name.required' => ':attribute না দিয়ে উপায় নেই গোলাম হোসেন।',
    //         'name.min' => ':attribute কমপক্ষে ৫ অক্ষরের হতে হবে।',
    //         'description.required' => 'ডিস্ক্রিপ্সন দিতেই হবে।',
    //     ]);

    //     $formData = $request->all();
    //     Category::create($formData);

    //     // redirect to page 
    //     return redirect()->route('category.index')->with(['msg' => 'New category created', 'type' => 'success']);
    // }



    public function store(StoreCategoryRequest $request)
{
    $this->validate($request, [
        'name' => "required|string",
        'description' => "required|min:10|max:255"
    ]);

    $formData = $request->all();
    Category::create($formData);

    // redirect to page 
    return redirect()->route('category.index')->with(['msg' => 'New category created', 'type' => 'success']);
}

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $category = Category::find($id);
        return view('pages.category.show')->with('categories', $category);
    }

    /*
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('pages.category.edit', [
            'category' => $category,
            'categories' => Category::all()
        ]);
    }

    /*
     * Update the specified resource in storage.
     */
    // public function update(UpdateCategoryRequest $request, Category $category)
    // {
    //     //
    // }

    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'name' => "required|string",
            'description' => "required|min:10|max:255"
        ]);
        $category->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);


        return redirect()->route('category.index');
    }



    /**
     * Remove the specified resource from storage.
     */


    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index');
    }

}
