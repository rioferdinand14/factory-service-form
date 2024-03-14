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
        $projects = Project::orderBy('id', 'desc')->paginate(5);
        return view('table', compact('projects'));

    }


    public function getLatestProjects()
    {
        $projects = Project::orderBy('id', 'desc')->latest()->paginate(5); // Adjust as needed
        return response()->json([
            'data' => $projects->items(), // Get the data items
            'links' => $projects->links()->toHtml(), // Get pagination links as HTML
        ]);
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
        $projects = Project::find($id);
        return response()->json(['status' => 'sucess', 'data' => $projects]);
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
