<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::latest()->get();

        return view(
            'users.index',
            compact('users')
        );
    }


    public function updateRole(
        Request $request,
        $id
    ) {

        $user = User::findOrFail($id);

        $validated = $request->validate([
            'role' => 'required|in:admin,user',
        ]);

        $user->role = $validated['role'];

        $user->save();

        return redirect('/users')
            ->with(
                'success',
                'User role updated successfully!'
            );
    }


    public function destroy(
        $id
    ) {

        $user = User::findOrFail($id);

        if ($user->id === auth()->id()) {

            return redirect('/users')
                ->with(
                    'error',
                    'You cannot delete your own account!'
                );
        }

        $user->delete();

        return redirect('/users')
            ->with(
                'success',
                'User deleted successfully!'
            );
    }

}