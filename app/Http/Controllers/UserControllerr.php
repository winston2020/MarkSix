<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControllerr extends Controller
{
    public function index()
    {
        return view('user.index');
    }
}
