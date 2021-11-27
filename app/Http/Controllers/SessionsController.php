<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function Create()
    {
        return view('/login');

    }

    public function Store()
    {
        if(! Auth::attempt(request(['email' , 'password'])))  
        {
            return back()->withErrors([
                'massage' => 'Email Or Password Not Correct !',
            ]);
        }      

        return redirect('/home');
    }

    public function Destroy()
    {
        Auth::logout();
        
        return redirect('/home');
    }
}
