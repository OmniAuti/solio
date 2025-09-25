<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function view() {
        return view('pages/login');
    }

    public function store() {
        $validated_attributes = request()->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        // NEED TO HAVE ONE WHERE IT CHECKS IF USERNAME OR EM AIL ENTERED
        $validLogin = Auth::attempt($validated_attributes);
        
        if (!$validLogin) {
            throw ValidationException::withMessages([
                'email' => 'Sorry, these login credentials do not match what we have in our system',
            ]);
        }

        request()->session()->regenerate();

        return redirect('/dashboard');
    }

    public function destroy() {
        Auth::logout();
        return redirect('/login');
    }
}
