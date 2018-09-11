<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Video;
use App\VideoTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function videolist($tag)
    {
        $videotag = VideoTag::where(['name'=>$tag])->first();
        $video = Video::where(['tag_id'=>$videotag->id])->get();
        return view('video.list',compact('video'));
    }

    public function show($id)
    {

        $video =Video::find($id);
        $videodata = Video::where(['tag_id'=>$video->tag_id])->get();
        return view('video.show',compact('video','videodata'));
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
