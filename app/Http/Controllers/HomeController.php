<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banner = Banner::all();
        dd($banner);
        return view('welcome');
    }

}
