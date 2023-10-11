<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function logout()
    {

        Auth::logout();
        return redirect('/')->with('success', 'Godbey');
    }


    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([

            'email' => "required|email|exists:users,email",
            'password' => "required",
        ]);
        if (auth()->attempt($attributes)) {
            session()->regenerate();
            return redirect('/')->with(['success' => 'Welcome Back']);
        }

        throw ValidationException::withMessages([
            'email' => "your provided cridentials could not be verified",
        ]);

        // return back()->withInput()->withErrors(['email'=>"your provided cridentials could not be verified"]);
    }
}
