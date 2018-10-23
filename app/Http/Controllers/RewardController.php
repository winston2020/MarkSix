<?php

namespace App\Http\Controllers;

use App\Mssc;
use App\Msssc;
use Illuminate\Http\Request;

class RewardController extends Controller
{
    public function index()
    {
        $mssc = Mssc::orderby('id','desc')->take(10)->get();
        $msssc = Msssc::orderby('id','desc')->take(10)->get();
        return view('reward.list',compact('mssc','msssc'));
    }

    public function msssc()
    {
        $msssc = Msssc::orderby('id','desc')->take(10)->get();
        return view('reward.msssc',compact('msssc'));
    }

    public function mssc()
    {
        $mssc = Mssc::orderby('id','desc')->take(10)->get();
        return view('reward.mssc',compact('mssc'));
    }

}
