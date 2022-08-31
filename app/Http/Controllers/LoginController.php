<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        // $credentials = $request->only('email','password');
        if (Auth::attempt($attributes)) {
            return redirect('/')->with('success', 'You are logged in');
        }
        throw ValidationException::withMessages([
            'email' => 'Email not found',
            'password' => 'password doesnt match'
        ]);
        // cara 2
        // $user = User::whereEmail($request->email)->first();
        // if ($user) {
        //     # code...
        //     if(Hash::check($request->password, $user->password)){
        //         dd(Auth::login($user));
        //         // return redirect('/')->with('success', 'Logged in');
        //     }
        //     throw ValidationException::withMessages([
        //         'password' => 'Password doesnt match'
        //     ]);
        // }
        // throw ValidationException::withMessages([
        //     'email' => 'Email not found'
        // ]);
    }
}
