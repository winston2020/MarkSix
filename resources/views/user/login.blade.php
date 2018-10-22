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
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="icon" type="image/png" href="{{url('i/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{url('i/app-icon72x72@2x.png')}}">
    <meta name="apple-mobile-web-app-title" content="秒速时时彩"/>
    <link rel="stylesheet" href="{{url('css/amazeui.min.css')}}"/>
    <link rel="stylesheet" href="{{url('css/admin.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
    <script src="{{url('js/amazeui.ie8polyfill.min.js')}}"></script>
    <script src="{{url('js/amazeui.min.js')}}"></script>
    <script src="{{url('js/app.js')}}"></script>
</head>
<body>
<header data-am-widget="header"
        class="am-header am-header-default">
    <div class="am-header-left am-header-nav">
        @if(\Illuminate\Support\Facades\Auth::check())
            <i class="am-header-icon am-icon-home"></i>
        @else
            <a href="/" class="">
                &rightleftharpoons; <a href="/" style="font-size: 0.8rem">返回</a>
            </a>
        @endif
    </div>
</header>
<div class="login-container">
    <h1>9527欢迎您</h1>
    <div class="connect">
        <p style="left: 0%;">请填写您的账号密码</p>
    </div>
    <form method="post" id="dologin" novalidate="novalidate">
        <div>
            <input type="text" name="name" class="username valid" placeholder="用户名" autocomplete="off"
                   aria-required="true" aria-invalid="false">
        </div>
        <div>
            <input type="password" name="password" class="password" placeholder="密码" oncontextmenu="return false"
                   onpaste="return false">
        </div>
        <button id="login" type="submit">登 陆</button>
    </form>
    <a href="/regist">
        <button type="button" class="register-tis">还有没有账号？</button>
    </a>
</div>

<ul id="supersized" class="quality" style="visibility: visible;">
    <li class="slide-0" style="visibility: visible; opacity: 1;"><a target="_blank"><img src="{{url('images/1.jpg')}}"
                                                                                         style="width: 1920px; height: 1209.6px; left: 0px; top: -182.5px;"></a>
    </li>
    <li class="slide-1 prevslide" style="visibility: visible; opacity: 1;"><a target="_blank"><img src="{{url('images/2.jpg')}}"
                                                                                                   style="width: 1920px; left: 0px; top: -250px; height: 1344px;"></a>
    </li>
    <li class="slide-2 activeslide" style="visibility: visible; opacity: 1;"><a target="_blank"><img src="{{url('images/3.jpg')}}"
                                                                                                     style="width: 1920px; left: 0px; top: -183px; height: 1209.6px;"></a>
    </li>
</ul>

<script>
    $(function () {
        //按钮单击时执行

        $("#login").click(function () {
            data = $('#dologin').serialize()
            //Ajax调用处理
            var html = $.ajax({
                type: "POST",
                url: "/user/login",
                data: data,
                success: function (data) {
                    if (data.status == 200) {
                        window.location.href = "/";
                    } else {
                        alert('账号或密码不正确');
                    }
                }
            })
        });
    });
</script>



{{--<div class="am-navbar am-navbar-default" data-am-widget="navbar">--}}
    {{--<ul class="am-navbar-nav am-cf am-avg-sm-3"><!--导航条是否隐藏多余项的关键参数-->--}}
        {{--<li>--}}
            {{--<a href="#">--}}
                {{--<span class="am-icon-home"></span>--}}
                {{--<span class="am-navbar-label">首页</span>--}}
            {{--</a>--}}
        {{--</li>--}}
        {{--<li>--}}
            {{--<a href="#">--}}
                {{--<span class="am-icon-user-md"></span>--}}
                {{--<span class="am-navbar-label">个人</span>--}}
            {{--</a>--}}
        {{--</li>--}}
        {{--<li>--}}
            {{--<a href="#">--}}
                {{--<span class="am-icon-star"></span>--}}
                {{--<span class="am-navbar-label">收藏</span>--}}
            {{--</a>--}}
        {{--</li>--}}
        {{--<li>--}}
            {{--<a href="#">--}}
                {{--<span class="am-icon-share-square-o"></span>--}}
                {{--<span class="am-navbar-label">分享</span>--}}
            {{--</a>--}}
        {{--</li>--}}
        {{--<li>--}}
            {{--<a href="#">--}}
                {{--<span class="am-icon-comments-o"></span>--}}
                {{--<span class="am-navbar-label">聊天</span>--}}
            {{--</a>--}}
        {{--</li>--}}
    {{--</ul>--}}
{{--</div>--}}


</body>
</html>
