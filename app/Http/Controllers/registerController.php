<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('conten.login.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validasiRegister = $request->validate([
            'username' => ['required', 'unique:Users', 'max:255', 'min:5'],
            'password' => ['required', 'confirmed', 'min:5', 'max:255'],
            'password_confirmation' => 'required'
        ]);

        $validasiRegister['password'] = bcrypt($validasiRegister['password']);
        User::create($validasiRegister);

        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}
