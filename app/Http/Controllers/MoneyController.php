<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoneyController extends Controller
{
    public function index()
    {
        return view('money.index');
    }
}
