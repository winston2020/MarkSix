@extends('layout.app')

@section('body')
    <ul data-am-widget="gallery" class="am-gallery am-avg-sm-2
  am-avg-md-3 am-avg-lg-4 am-gallery-default" data-am-gallery="{ pureview: false }" >
       @foreach($video as $item)
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