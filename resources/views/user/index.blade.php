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
    <script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="{{url('js/amazeui.js')}}"></script>
    <script src="{{url('js/app.js')}}"></script>
    <style>
        .am-g{
            text-align: center;
            margin-top: 3rem;
        }
        .am-u-sm-4>img{
            width: 2rem;
            width: 2rem;
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
<img src="{{url('banner/banner1.jpg')}}" class="am-img-responsive" alt="" style="width: 100%"/>
<table class="am-table">
    <tr>
        <td><a href="/money">我要赚钱</a></td>
        <td><a href="/user/recharge">在线充值</a></td>
        <td><a href="/tixian">立即提现</a></td>
    </tr>
</table>
<div class="am-g">
    <a href="/user/information"><div class="am-u-sm-4"><img src="{{url('images/geren.png')}}"><div>个人中心</div></div></a>
    <a href="/user/password"><div class="am-u-sm-4"><img src="{{url('images/denglu.png')}}"><div>登录密码</div></div></a>
    <a href="/user/message"><div class="am-u-sm-4"><img src="{{url('images/xinxi.png')}}"><div>信息中心</div></div></a>
</div>
<div class="am-g">
    <a href="/user/gold"><div class="am-u-sm-4"><img src="{{url('images/jinbi.png')}}"><div>金币管理</div></div></a>
    <a href="/user/withdraw"><div class="am-u-sm-4"><img src="{{url('images/qukuan.png')}}"><div>取款密码</div></div></a>
    <a href="/user/bank"><div class="am-u-sm-4"><img src="{{url('images/yinhangka.png')}}"><div>银行账号</div></div></a>
</div>
<div class="am-g">
    <a href="/user/extension"><div class="am-u-sm-4"><img src="{{url('images/jilu.png')}}"><div>推广记录</div></div></a>
    <a href="/user/service"><div class="am-u-sm-4"><img src="{{url('images/kefu.png')}}"><div>在线客服</div></div></a>
    <a href="#" ><div class="am-u-sm-4"><img src="{{url('images/tuichu.png')}}"><div>退出登录</div></div></a>
</div>



<div class="am-navbar am-navbar-default" data-am-widget="navbar">
    <ul class="am-navbar-nav am-cf am-avg-sm-3"><!--导航条是否隐藏多余项的关键参数-->
        <li>
            <a href="/">
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

</body>
</html>
