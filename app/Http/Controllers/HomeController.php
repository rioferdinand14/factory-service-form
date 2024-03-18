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
     * Fetch the project data for modal.
     */
    public function getProjectData($projectId)
    {
        // Fetch existing data of the project with the given ID
        $project = Project::findOrFail($projectId);

        // Return the project data as JSON response
        return response()->json($project);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */

    public function updateProject(Request $request)
    {
        $projectId = $request->input('project_id');
        $project = Project::findOrFail($projectId);

        // Update project data
        $project->input_date = $request->input('input_date');
        $project->eta_project = $request->input('eta_project');
        $project->requestor = $request->input('requestor');
        $project->pic_project = $request->input('pic_project');
        $project->nama_project = $request->input('nama_project');
        $project->category_project = $request->input('category_project');
        $project->status = $request->input('status');
        $project->description_project = $request->input('description_project');
        // Update other fields as needed

        // Save the updated project
        $project->save();

        // Return a response (e.g., success message or updated project data)
        return response()->json(['message' => 'Project updated successfully', 'project' => $project]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($projectId)
    {
        try {
            // Find the project by ID and delete it
            $project = Project::findOrFail($projectId);
            $project->delete();
            
            // Return a success response
            return response()->json(['message' => 'Project deleted successfully']);
        } catch (\Exception $e) {
            // Handle any errors and return an error response
            return response()->json(['error' => 'Failed to delete project'], 500);
        }
    }
}
