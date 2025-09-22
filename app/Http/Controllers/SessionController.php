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
            'username' => ['required'],
            'password' => ['required']
        ]);
        die($validated_attributes);

    }

    public function destroy() {

    }
}
