<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        dd(auth()->user());
        if(auth()->user()){
            return 'ada';
        }else{
            return 'gada';
        }

        return view('conten.dahsboard.home',[
            'nama' => 'sadam',
            'page' => 'home'
        ]);
    }
}
