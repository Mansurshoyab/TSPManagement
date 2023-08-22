<?php

namespace App\Http\Controllers;

use App\Models\Modiul;
use App\Http\Requests\StoreModiulRequest;
use App\Http\Requests\UpdateModiulRequest;
use App\Models\Course;

class ModiulController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = Course::all();
        $modiuls  = Modiul::all();
        return view('pages.modiul.index')->with(['course'=> $course, 'modiuls'=> $modiuls ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('pages.modiul.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreModiulRequest $request)
    {
        $this->validate($request,[
            'course_id' => 'required|string|max:25',
            'modiul_name' => 'required|string|max:50',
            'description' => 'required|string|max:255',
        ]);

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
        // dd($modiul);
        $course = Course::all();
        return view('pages.modiul.edit')->with(['course'=>$course,'modiul'=>$modiul,]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateModiulRequest $request, Modiul $modiul)
    {
        $this->validate($request,[
            'course_id' => 'required|string|max:12',
            'modiul_name' => 'required|string|max:50',
            'description' => 'required|string|max:255',
        ]);
        
        $modiul->update([
            'course_id' => $request->input('course_id'),
            'modiul_name' => $request->input('modiul_name'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('modiul.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Modiul $modiul)
    {
        $modiul->delete();
        return redirect()->route('modiul.index');
    }
}
