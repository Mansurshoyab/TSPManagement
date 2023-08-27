<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Course;
use App\Http\Requests\StoreBatchRequest;
use App\Http\Requests\UpdateBatchRequest;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $batch = Batch::all();
        // $batch->loadMissing('course');
        $course = Course::all();
        return view('pages.batch.index')->with(['batch' => $batch, 'course' => $course]);
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
    public function store(StoreBatchRequest $request)
    {
        Batch::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Batch $batch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Batch $batch)
    {
        $batch->load('course');
        return view('pages.batch.edit')->with(['batch' => $batch]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBatchRequest $request, Batch $batch)
    {
        $batch->update(
            $request->all()
        );
        return redirect()->route('batch.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Batch $batch)
    {
        //
    }

    public function getbatch($courseId)
    {
        $batch = Batch::where("course_id", $courseId)->pluck("name", "id");
        return response()->json($batch);
    }
}
