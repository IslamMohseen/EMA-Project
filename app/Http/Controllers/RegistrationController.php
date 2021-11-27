<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
class RegistrationController extends Controller
{
    public function Create()
    {
        return view('/register');
    }

    public function Store(Request $request)
    {
        // Create User
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        //Add Role
        $user->roles()->attach(Role::where('name', 'User')->first());

        // Login
        Auth::login($user);

        //redirect
        return redirect('/posts');
    }

}
