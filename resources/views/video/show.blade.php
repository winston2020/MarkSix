@extends('layout.app')

@section('body')

    <video controls="controls" poster="{{$video->video_img_url}}" autoplay="autoplay" style="width: 100%; height: auto;margin-top: 10px">
        <source src="{{$video->video_url}}" type="video/mp4">
        <source src="{{$video->video_url}}" type="video/ogg">
        <source src="{{$video->video_url}}" type="video/webm">
        <object data="{{$video->video_url}}">
            <embed src="{{$video->video_url}}">
        </object>
        <p algin="center">很抱歉！您的浏览器不支持视频控件请更新版本/使用uc浏览器等</p>
    </video>


    <ul data-am-widget="gallery" class="am-gallery am-avg-sm-2
  am-avg-md-3 am-avg-lg-4 am-gallery-default" data-am-gallery="{ pureview: false }" >
       @foreach($videodata as $item)
        <li>
            <div class="am-gallery-item">
                <a href="{{url('video/id')}}/{{$item->id}}" class="">
                    <img src="{{$item->video_img_url}}"  alt="{{$item->name}}"/>
                    <h3 class="am-gallery-title">{{$item->name}}</h3>
                    <div class="am-gallery-desc">{{$item->created_at}}</div>
                </a>
            </div>
        </li>
        @endforeach
    </ul>
    @endsection