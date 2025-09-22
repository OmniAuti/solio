<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class RegisterUserController extends Controller
{
    public function view() {
        return view('pages/signup');
    }

    public function store() {
        $validatedAttributes = request()->validate([
            'name' => ['required'],
            'email' => ['required'],
            'stagename' => ['required'],
            'password' => ['required'],
        ]);
    }
}
