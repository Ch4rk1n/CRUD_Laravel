<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
class loginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    

    public function auth(Request $request)
    {   
        echo Hash::make($request->get('password'));
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        
        dd(Auth::attempt($credentials, $request->has('remember')));
        
    }
}
