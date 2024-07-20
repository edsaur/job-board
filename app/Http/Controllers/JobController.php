<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        // VALIDATE THE INCOMING REQUEST 
            // VALIDATE THE SEARCH BAR
            // VALIDATE THE MININUM AND MAXIMUM VALUE
        $this->validate($request, [
           'search' => 'nullable|string|max:255',
           'min_val' => 'nullable|integer|min:0',
           'max_val' => 'nullable|integer|min:0'
        ]);
        
        // FILTER THE JOBS
        $filters = request()->only(['search', 'min_val', 'max_val', 'experience', 'categories']);
        $jobs = Job::filter($filters);

        return view('job.index', ['jobs' => $jobs->orderBy('created_at', 'desc')->paginate(10), 'categories' => Job::$categories, 'experiences' => Job::$experience]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('job.show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
