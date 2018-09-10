<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MsscController extends Controller
{
    public function index()
    {
        return view('reward.msssc.index');
    }
}
