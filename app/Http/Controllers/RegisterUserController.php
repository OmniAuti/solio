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
            'email' => ['required'],
            'first_name' => ['required'],
            'last_name' => ['required'],
            'stage_name' => ['required'],
            'password' => ['required'],
            'birthday' => ['required'],
            'terms_of_use' => ['required']
        ]);
    }
}
