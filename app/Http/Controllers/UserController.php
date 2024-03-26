<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\TypeUser;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    if (Auth::check()) {
        $user = Auth::user();
        $typeId = $user->type_id;
        
        // Retrieve the role name from the type_user table based on the type_id
        $typeUser = TypeUser::find($typeId);

        // Check if the TypeUser with the given ID exists
        if ($typeUser) {
            $role = $typeUser->name;
        } else {
            // If the TypeUser doesn't exist, set role to a default value or handle it accordingly
            $role = 'Unknown Role';
        }

        return view('navbar', ['user' => $user, 'role' => $role]);
    }
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
