<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\EditProfileRequest;
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

            return view('user.profile', ['user' => $user, 'role' => $role]);
        }
    }

    public function changePassword(EditProfileRequest $request)
    {
        // dd($request->all());
       if (Auth::check()) {
            /** @var \App\Models\User $user **/
            $user = Auth::user();
            $oldPassword = $request->get('old_password');
            $newPassword = $request->get('new_password');
            $confirmPassword = $request->get('confirm_password');
            
            // Check if the old password matches the user's current password
            if (!Hash::check($oldPassword, $user->password)) {
                return redirect()->back()->with('error', 'Password lama tidak sesuai.');
            }

            // Check if the new password is the same as the old password
            if (Hash::check($newPassword, $user->password)) {
                // dd('password match!');
                return redirect()->back()->with('error', 'Password baru tidak boleh sama dengan password lama.');
            }

            // Check if the confirmation password matches the new password
            if ($newPassword !== $confirmPassword) {
                dd('password tidak sama');
                return redirect()->back()->with('error', 'Konfirmasi password tidak sesuai.');
            }

            // Update the user's password
            $user->password = Hash::make($newPassword);
            $user->save();

            return redirect()->back()->with('success', 'Password berhasil diubah.');
       }
    }
}
