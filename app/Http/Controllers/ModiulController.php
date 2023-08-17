<?php

namespace App\Http\Controllers;

use App\Models\Modiul;
use App\Http\Requests\StoreModiulRequest;
use App\Http\Requests\UpdateModiulRequest;
use App\Models\Course;

class ModiulController extends Controller
{

    //  public function modiul(){
    //     return view('pages.modiul.index');
    //  }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = Course::all();
        $modiul = Modiul::all();
        return view('pages.modiul.index')->with(['course'=> $course, 'modiul'=> $modiul]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.modiul.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreModiulRequest $request)
    {
        dd($request);
        Modiul::create($request->all());
        return redirect()->route('modiul.index')->with(['msg' => 'New category created', 'type' => 'success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Modiul $modiul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Modiul $modiul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateModiulRequest $request, Modiul $modiul)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Modiul $modiul)
    {
        //
    }
}
