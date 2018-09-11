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
    <style>
        .am-g{
            text-align: center;
            margin-top: 3rem;
        }
        .am-u-sm-4>img{
            width: 10rem;
            width: 10rem;
        }
        tr>td{
            text-align: center;
        }
        tr>td>a{
            color: orangered;
        }
    </style>
</head>
<body style=" overflow-y:auto;">
<img src="{{url('banner/banner1.jpg')}}" class="am-img-responsive" alt=""/>
<table class="am-table">
    <tr>
        <td><a href="/money">我要赚钱</a></td>
        <td><a href="#">在线充值</a></td>
        <td><a href="#">立即提现</a></td>
    </tr>
</table>
<button type="button" class="am-btn am-btn-primary am-btn-block am-round">支付宝充值</button>
<hr>
<button type="button" class="am-btn am-btn-primary am-btn-block am-round">微信充值</button>
<hr>
<button type="button" class="am-btn am-btn-default am-btn-block am-round">网银充值</button>


<div class="am-navbar am-navbar-default" data-am-widget="navbar">
    <ul class="am-navbar-nav am-cf am-avg-sm-3"><!--导航条是否隐藏多余项的关键参数-->
        <li>
            <a href="#">
                <span class="am-icon-home"></span>
                <span class="am-navbar-label">首页</span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="am-icon-user-md"></span>
                <span class="am-navbar-label">个人</span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="am-icon-star"></span>
                <span class="am-navbar-label">收藏</span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="am-icon-share-square-o"></span>
                <span class="am-navbar-label">分享</span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="am-icon-comments-o"></span>
                <span class="am-navbar-label">聊天</span>
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
