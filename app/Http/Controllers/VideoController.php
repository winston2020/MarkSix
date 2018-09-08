<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function addvideo()
    {
       $video = Video::all();
       foreach ($video as $item){
           $videodata = Video::find($item->id);
           $videodata->created_at = date('Y-m-d H:i:s');
           $videodata->updated_at = date('Y-m-d H:i:s');
           $videodata->save();
       }
    }

}
