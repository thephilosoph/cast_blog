<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }


    public function store()
    {
        // return request()->all();
        $attributes = request()->validate([
            'name' => "required|max:255",
            'userName' => "required|max:255|min:3|unique:users,userName",
            'email' => "required|max:255|unique:users,email",
            'password' => "required|max:255|min:8",
        ]);

        $user = User::create($attributes);
        Auth::login($user);
        // session()->falsh(['success', 'you have registered successfully']);
        return redirect('/')->with(['success'=> 'you have registered successfully']);
    }
}
