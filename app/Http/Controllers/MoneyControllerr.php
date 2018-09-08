<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoneyControllerr extends Controller
{
    public function index()
    {
        return view('money.index');
    }
}
