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
    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
    <script src="{{url('js/amazeui.min.js')}}"></script>
    <script src="{{url('js/app.js')}}"></script>
    <style>
        .am-tabs>ul>li{
            margin-left: 30px;
        }
    </style>
</head>
<body style="background: white">
<header data-am-widget="header"
        class="am-header am-header-default">
    <div class="am-header-left am-header-nav">
        &rightleftharpoons; <a href="/user" style="font-size: 1.8rem">返回</a>
    </div>
    <h1 class="am-header-title">
        <a href="/user" class="">
            金币管理
        </a>
    </h1>
</header>
<br>
<table class="am-table">
    <thead>
    <tr>
        <th>序号</th>
        <th>姓名</th>
        <th>卡号</th>
        <th>银行</th>
        <th>开户行</th>
        <th>日期</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>萨德</td>
        <td>33213133</td>
        <td>司法程序</td>
        <td>司法程序</td>
        <td>2012-10-01</td>
    </tr>
    <tr>
        <td>1</td>
        <td>萨德</td>
        <td>33213133</td>
        <td>司法程序</td>
        <td>司法程序</td>
        <td>2012-10-01</td>
    </tr>
    </tbody>
</table>
<a href="/user/addbank"><button type="button" class="am-btn am-btn-primary am-btn-block am-round">提交修改</button></a>
</body>
</html>
