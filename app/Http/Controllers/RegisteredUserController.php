<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    // Show the registration form
    public function create()
    {
        return view('auth.register');
    }

    // Handle user registration 
    public function store()
    {
        // Validate the input data
        $attributes = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(6), 'confirmed'],
        ]);

        // Create a new user
        $user = User::create($attributes);

        // Log in the user
        Auth::login($user);

        // Redirect to the jobs page
        return redirect('/jobs');
    }
}
