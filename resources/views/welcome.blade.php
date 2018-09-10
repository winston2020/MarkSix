@extends('layout.app')

@section('body')

    <div data-am-widget="slider" class="am-slider am-slider-default" data-am-slider='{}'  style="margin-top: 10px">
        <ul class="am-slides">
            @foreach($banner as $item)
                <li>
                    <img src="{{url($item->banner_url)}}">
                </li>
            @endforeach
        </ul>
    </div>

    <ul data-am-widget="gallery" class="am-gallery am-avg-sm-2
  am-avg-md-3 am-avg-lg-4 am-gallery-default" data-am-gallery="{ pureview: false }" >
        <li>
            <div class="am-gallery-item">
                <a href="/msssc" class="">
                    <img src="{{url('images/b10.jpg')}}"  alt="秒速时时彩"/>

                </a>
            </div>
        </li>
        <li>
            <div class="am-gallery-item">
                <a href="/mssc" class="">
                    <img src="{{url('images/b9.jpg')}}"  alt="秒速赛车"/>

                </a>
            </div>
        </li>
        <li>
            <div class="am-gallery-item">
                <a href="/video/news" class="">
                    <img src="{{url('images/b5.jpg')}}"  alt="最新上传"/>

                </a>
            </div>
        </li>
        <li>
            <div class="am-gallery-item">
                <a href="/video/hots" class="">
                    <img src="{{url('images/b6.jpg')}}"  alt="热门视频"/>

                </a>
            </div>
        </li>
        <li>
            <div class="am-gallery-item">
                <a href="/video/laughs" class="">
                    <img src="{{url('images/b7.jpg')}}"  alt="搞笑视频"/>

                </a>
            </div>
        </li>
        <li>
            <div class="am-gallery-item">
                <a href="video/star" class="">
                    <img src="{{url('images/b8.jpg')}}"  alt="网红自拍"/>

                </a>
            </div>
        </li>
    </ul>
    @endsection
