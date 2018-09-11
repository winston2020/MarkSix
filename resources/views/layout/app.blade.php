<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="{{url('i/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{url('i/app-icon72x72@2x.png')}}">
    <meta name="apple-mobile-web-app-title" content="秒速时时彩" />
    <link rel="stylesheet" href="{{url('css/amazeui.min.css')}}"/>
    <link rel="stylesheet" href="{{url('css/admin.css')}}">
</head>
<body style=" overflow-y:auto;">
<header data-am-widget="header"
        class="am-header am-header-default">
    <div class="am-header-left am-header-nav">
        @if(\Illuminate\Support\Facades\Auth::check())
            <i class="am-header-icon am-icon-home"></i>
        @else
            <a href="/regist" class="">
                注册
            </a>
        @endif
    </div>

    <h1 class="am-header-title">
        <a href="#" class="">
            9527视频娱乐
        </a>
    </h1>

    <div class="am-header-right am-header-nav">
        @if(\Illuminate\Support\Facades\Auth::check())
            <a href="/user" class="">
                {{\Illuminate\Support\Facades\Auth::user()->name}}
            </a>
        @else
            @if($_SERVER['REQUEST_URI'] == 'regist')
                <a href="/regist" class="">
                    注册
                </a>
                @else
                <a href="/login" class="">
                    登陆
                </a>
                @endif

        @endif
    </div>
</header>

@yield('body')

<div class="am-navbar am-navbar-default" data-am-widget="navbar">
    <ul class="am-navbar-nav am-cf am-avg-sm-3"><!--导航条是否隐藏多余项的关键参数-->
        <li>
            <a href="/active">
                <span class="am-icon-home"></span>
                <span class="am-navbar-label">活动</span>
            </a>
        </li>
        <li>
            <a href="/reward">
                <span class="am-icon-user-md"></span>
                <span class="am-navbar-label">开奖</span>
            </a>
        </li>
        <li>
            <a href="/money">
                <span class="am-icon-star"></span>
                <span class="am-navbar-label">赚钱</span>
            </a>
        </li>
        <li>
            <a href="/user">
                <span class="am-icon-share-square-o"></span>
                <span class="am-navbar-label">会员</span>
            </a>
        </li>
    </ul>
</div>

    <!--[if lt IE 9]>
    <script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
    <script src="{{url('js/amazeui.ie8polyfill.min.js')}}"></script>
    <![endif]-->

    <!--[if (gte IE 9)|!(IE)]><!-->
    <script src="{{url('js/jquery.min.js')}}"></script>
    <!--<![endif]-->
    <script src="{{url('js/amazeui.min.js')}}"></script>
    <script src="{{url('js/app.js')}}"></script>
</body>
</html>
