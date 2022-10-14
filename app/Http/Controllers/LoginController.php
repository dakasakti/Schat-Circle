<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RateLimiter\RequestRateLimiterInterface;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function SignIn(){
        return view('conten.login.index',[
            'title' => 'sign-in'
        ]);
    }

    public function SignOut()
    {
        return view('conten.login.login',[
            'title' => 'sign-out'
        ]);
    }

    public function StoreSignIn(Request $request)
    {

        $validasiRegister = $request->validate([
            'username' => ['required','unique:Users','max:255','min:5'],
            'password' => ['required','unique:Users','min:5','max:255']
        ]);

        if($validasiRegister['password'] == $request->konfirmasi){
            $validasiRegister['password'] = bcrypt($validasiRegister['password']);
            User::Create($validasiRegister);
        }else{
            return redirect('/sign-out')->with('failed','Registrasi yang anda input gagal');
        }

        return redirect('/sign-out')->with('success','Registrasi anda berhasil , Silahkan Login !');

    }

    public function StoreLogin(Request $request)
    {
        $validasiLogin = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($validasiLogin))
        {
            return redirect()->intended('/home');
        }

        return redirect('/sign-out')->with('failedLogin','Username dan Password salah');




    }
}
