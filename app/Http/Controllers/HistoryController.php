<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Pagination\LengthAwarePaginator;


class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve soft-deleted projects and projects with status 'Done'
        $projects = Project::withTrashed()
                   ->where(function ($query) {
                       $query->where('status', 'Done');
                       $query->orWhereNotNull('deleted_at');
                   })
                   ->orderBy('id', 'desc')
                   ->paginate(5);
        // Pass the paginated projects to your view
        return view('history', compact('projects'));
    }



    
    public function restoreProject($id)
    {
        // Find the soft-deleted project by its ID
        $project = Project::withTrashed()->findOrFail($id);

        // Restore the project
        $project->restore();

        // Optionally, redirect or return a response
        return redirect()->back()->with('success', 'Project restored successfully');
    }


    public function permanentDelete($id)
    {
        $project = Project::withTrashed()->findOrFail($id);
        
        // Permanently delete the project
        $project->forceDelete();
        
        return response()->json(['message' => 'Project permanently deleted.']);;
    }

}
