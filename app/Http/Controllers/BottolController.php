<?php

namespace App\Http\Controllers;

use App\Models\Bottol;
use App\Http\Requests\StoreBottolRequest;
use App\Http\Requests\UpdateBottolRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class BottolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.bottol.index');
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.bottol.index');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        dd('something');
        return view('pages.bottol.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bottol $bottol)
    {
        return view('pages.bottol.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bottol $bottol)
    {
        return view('pages.bottol.index');
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(UpdateBottolRequest $request, Bottol $bottol)
    public function update(Request $request, Bottol $bottol)
    {
        dd($request);
        return 'hello rejoan';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bottol $bottol)
    {
        return view('pages.bottol.index');
    }
}
