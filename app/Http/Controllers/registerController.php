<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
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
            'username' => ['required','unique:Users','max:255','min:5'],
            'password' => ['required','unique:Users','min:5','max:255']
        ]);

        if($validasiRegister['password'] == $request->konfirmasi){
            $validasiRegister['password'] = hash::make($validasiRegister['password']);
            User::create($validasiRegister);
        }

        // $validatedData['password'] = bcrypt($validatedData['password']);


        // $request->session()->flash('success', 'Registration successfull! Please login');

        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}