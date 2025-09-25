<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Carbon\Carbon;
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
            'password' => ['required', 'confirmed'],
            'birthday' => ['required'],
            'terms_of_use' => ['required'],
        ]);
// dd($validatedAttributes);

$time = new \DateTime($validatedAttributes['birthday']);

// $birthday_date = Carbon::createFromFormat('d-m-Y', $time );
        $user = User::create([
            'email' => $validatedAttributes['email'],
            'first_name' => $validatedAttributes['first_name'],
            'last_name' => $validatedAttributes['last_name'],
            'stage_name' => $validatedAttributes['stage_name'],
            'password' => $validatedAttributes['password'],
            'birthday' => $time->format('Uv'),
            'terms_of_use' => $validatedAttributes['terms_of_use'],
        ]);


        Auth::login($user);

       return redirect('/dashboard');
    }
}
