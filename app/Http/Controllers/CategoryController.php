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
        // return view('pages.category.index')->with('categories', Category::all());

        // ----------------------------------------------------------------------------------------

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
    public function store(StoreCategoryRequest $request)
    {


        // Category::create($request->all());
        // return redirect('category');
        // -------------------------------------------------------------------------------------

        $formData = $request->all();

        // save data 
        Category::create($formData);

        // redirect to page 
        return redirect()->route('category.index')->with(['msg' => 'New category created', 'type' => 'success']);
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
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'description' => 'required|string',
        //     // Add any other validation rules you need
        // ]);
    
        $category->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);
    
        return redirect()->route('category.index');
        //->with('success', 'Category updated successfully.')
    }
    
    

    /**
     * Remove the specified resource from storage.
     */


     public function destroy(Category $category)
     {
        // dd($category);
        $category->delete();
        return redirect()->route('category.index');
     }

    // public function destroy(){
    // $category = Category::find($id);
    // if ($category->delete()) {
    //     return redirect("category")->with("info", "Successfully Deleted category, ID: " . $category->id);
    // }
    // // --------------------------------------------------------------------------------------------
    // return redirect()->route('category.index')->with(['msg' => 'Category deleted successfully', 'type' => 'success']);
    // }
}
