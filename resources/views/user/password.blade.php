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
    <meta name="apple-mobile-web-app-title" content=""/>
    <link rel="stylesheet" href="{{url('css/amazeui.min.css')}}"/>
    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
    <script src="{{url('js/amazeui.min.js')}}"></script>
    <script src="{{url('js/app.js')}}"></script>
</head>
<body style="background: white">
<header data-am-widget="header"
        class="am-header am-header-default">
    <div class="am-header-left am-header-nav">
        &rightleftharpoons; <a href="/user" style="font-size: 1.8rem">返回</a>
    </div>
    <h1 class="am-header-title">
        <a href="/user" class="">
            登录密码
        </a>
    </h1>
</header>
<br>
<div class="am-input-group am-input-group-primary">
    <span class="am-input-group-label"><i class="am-icon-lock am-icon-fw"></i></span>
    <input type="text" class="am-form-field" placeholder="原始密码">
</div>
<br>
<div class="am-input-group am-input-group-secondary">
    <span class="am-input-group-label"><i class="am-icon-lock am-icon-fw"></i></span>
    <input type="text" class="am-form-field" placeholder="新密码">
</div>
<br>
<div class="am-input-group am-input-group-success">
    <span class="am-input-group-label"><i class="am-icon-lock am-icon-fw"></i></span>
    <input type="text" class="am-form-field" placeholder="确认新密码">
</div>
<br>
<a href="#"><button type="button" class="am-btn am-btn-primary am-btn-block am-round">提交修改</button></a>
</body>
</html>
