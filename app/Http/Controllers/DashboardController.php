<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        //the options below are the same
        // $this->middleware('auth');
        $this->middleware('CheckLogin');
    }

    public function index()
    {
        return view('conten.dahsboard.home', [
            'nama' => 'sadam',
            'page' => 'home'
        ]);
    }
}
