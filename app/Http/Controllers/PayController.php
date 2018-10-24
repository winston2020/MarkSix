<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayController extends Controller
{

    public function index(Request $request){
        dd($request->input('paydata'));
    }


}
