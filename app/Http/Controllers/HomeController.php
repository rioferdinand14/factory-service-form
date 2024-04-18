<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Exports\SortId;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch only active projects (excluding those with status "Done")
        $projects = Project::where('status', '!=', 'Done')
                            ->orderBy('id', 'desc')
                            ->paginate(5);
        
        // Pass the active projects to your view
        return view('table', compact('projects'));
    }



    public function getLatestProjects()
    {
        $projects = Project::where('status', '!=', 'Done')
                            ->orderBy('id', 'desc')
                            ->latest()->paginate(5); // Adjust as needed
        return response()->json([
            'data' => $projects->items(), // Get the data items
            'links' => $projects->links()->toHtml(), // Get pagination links as HTML
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
     {

        // dd($request);
         $validatedData = $request->validate([
             'eta_project' => 'required|date_format:m/d/Y',
             'requestor' => 'required',
             'pic_project' => 'nullable',
             'nama_project' => 'required',
             'detail' => 'required',
             'category_project' => 'required',
             'status' => 'nullable',
             'description_project' => 'nullable',
             'photos_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240'
         ]);
     
         $validatedData['input_date'] = now()->toDateString(); // Assuming 'input_date' is of type DATE
         // Format the dates using Carbon
         $validatedData['eta_project'] = Carbon::createFromFormat('m/d/Y', $validatedData['eta_project']);
     
         $imageName = 'none'; // Initialize imageName with null
     
         if ($request->hasFile('photos_img')) 
            {
                // Get the file from the request
                $image = $request->file('photos_img');
                // Generate a unique name for the image file
                $imageName = time().'.'.$image->getClientOriginalExtension();
                // Store the image file in the specified directory
                $image->storeAs('images', $imageName, 'public'); // Store the image in the public/images directory
                $validatedData['photos_img'] = $imageName; // Assign imageName to 'image' field
            }
        
         // Create a new record in the database
         $model = Project::create($validatedData);
     
         return response()->json(['status' => 'success', 'data' => $model]);
     }
     


    /**
     * Fetch the project data for modal.
     */
    public function getProjectData($projectId)
    {
        // Fetch the project data based on the provided projectId
        $project = Project::find($projectId);

        // Check if the project exists
        if ($project) {
            // Return the project data as JSON response
            return response()->json($project);
        } else {
            // Return a 404 response if the project does not exist
            return response()->json(['error' => 'Project not found'], 404);
        }
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

    public function search(Request $request)
    {
        // Get the search query from the request
        $query = $request->input('query');

        // Perform the search query on the Project model
        $projects = Project::where('nama_project', 'LIKE', "%$query%")
                        ->orWhere('requestor', 'LIKE', "%$query%")
                        ->orWhere('category_project', 'LIKE', "%$query%")
                        ->orWhere('description_project', 'LIKE', "%$query%")
                        ->orWhere('status', 'LIKE', "%$query%")
                        ->orWhere('pic_project', 'LIKE', "%$query%")
                        ->orWhere('eta_project', 'LIKE', "%$query%")
                        ->orderBy('id', 'desc')
                        ->paginate(5); // Adjust pagination limit as needed

        // Return the search results
        return response()->json([
            'data' => $projects->items(), // Get the data items
            'links' => $projects->links()->toHtml(), // Get pagination links as HTML
        ]);
    }

    
    public function export()
    {
        return Excel::download(new SortId, 'project-fs.xlsx');
    }
}
 