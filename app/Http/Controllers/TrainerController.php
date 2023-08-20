<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use App\Http\Requests\StoreTrainerRequest;
use App\Http\Requests\UpdateTrainerRequest;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(Trainer::all());
        return view('pages.trainer.index')->with(['trainers' => Trainer::all()]);
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
    public function store(StoreTrainerRequest $request)
    {
        $this->validate($request,[
            'first_name' => 'required|string|max:12',
            'last_name' => 'required|string|max:12',
            'dob' => 'required|date',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:50',
            'specialization' => 'required|string|max:25',
            'experience' => 'required|string|min:0',
            'status' => 'required',
        ]);

        $trainer = $request->all();
        Trainer::create($trainer);
        return view('pages.trainer.index')->with(['trainers' => Trainer::all()]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Trainer $trainer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trainer $trainer)
    {
        return view('pages.trainer.edit', [
            'trainer' => $trainer,
            'trainers' => Trainer::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTrainerRequest $request, Trainer $trainer)
    {
        
        $this->validate($request,[
            'first_name' => 'required|string|max:12',
            'last_name' => 'required|string|max:12',
            'dob' => 'required|date',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:50',
            'specialization' => 'required|string|max:25',
            'experience' => 'required|string|min:0',
            'status' => 'required',
        ]);

        

        $trainer->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'dob' => $request->input('dob'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'specialization' => $request->input('specialization'),
            'experience' => $request->input('experience'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('trainer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trainer $trainer)
    {
        $trainer->delete();
        return redirect()->route('trainer.index');
    }
}
