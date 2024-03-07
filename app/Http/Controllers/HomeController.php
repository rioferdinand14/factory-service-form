<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::orderBy('input_date', 'desc')->get();
        return view('table', compact('projects'));
    }


    // HomeController.php
    // HomeController.php
    public function getLatestProjects()
    {
        $projects = Project::orderBy('input_date', 'desc')->latest()->get(); // Adjust as needed
        return response()->json($projects);
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
        $validatedData = $request->validate([
            'input_date' => 'required|date_format:m/d/Y', // Adjust the date format based on your datepicker
            'eta_project' => 'required|date_format:m/d/Y', // Adjust the date format based on your datepicker
            'requestor' => 'required',
            'pic_project' => 'required',
            'nama_project' => 'required',
            'category_project' => 'required',
            'status' => 'required',
            'description_project' => 'required',
        ]);

        // Format the dates using Carbon
        $validatedData['input_date'] = Carbon::createFromFormat('m/d/Y', $validatedData['input_date']);
        $validatedData['eta_project'] = Carbon::createFromFormat('m/d/Y', $validatedData['eta_project']);

        // Create a new record in the database
        $model = Project::create($validatedData);

        return response()->json(['status' => 'success', 'data' => $model]);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
