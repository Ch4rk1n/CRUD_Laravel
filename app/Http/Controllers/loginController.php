<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function show()
    {
        $admins = Admins::all();

        return view('login', compact('admins'));
    }
}
