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
    <script src="{{url('js/jquery.min.js')}}"></script>

</head>
<body>
<header data-am-widget="header"
        class="am-header am-header-default">
    <div class="am-header-left am-header-nav">
        <a href="/" class="">
            首页
        </a>
    </div>

    <h1 class="am-header-title">
        <a href="#title-link" class="">
            8848视频娱乐
        </a>
    </h1>

    <div class="am-header-right am-header-nav">
        <a href="/regist" class="">
            注册
        </a>
    </div>
</header>

<div class="am-g">
    <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">

        <form id="dologin"  class="am-form">
            <label for="email">用户名:</label>
            {{csrf_field()}}
            <input type="text" name="name" id="email" value="">
            <br>
            <label for="password">密码:</label>
            <input type="password" name="password" id="password" value="">
            <br>
            <label for="remember-me">
                <input id="remember-me" type="checkbox">
                记住密码
            </label>
            <br />
            <div class="am-cf">
                <input type="button" id="login" name="" value="登 录" class="am-btn am-btn-primary am-btn-sm am-fl">
            </div>
        </form>

        <script>
            $(function(){
                //按钮单击时执行

                $("#login").click(function(){
                    data = $('#dologin').serialize()
                    //Ajax调用处理
                    var html = $.ajax({
                        type: "POST",
                        url: "/user/login",
                        data: data,
                        success:function (data) {
                            if (data.status==200){
                                window.location.href = "/";
                            }else{
                                alert('账号或密码不正确');
                            }
                        }
                    })
                });
            });
        </script>

    </div>
</div>



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
    <!--<![endif]-->
    <script src="{{url('js/amazeui.min.js')}}"></script>
    <script src="{{url('js/app.js')}}"></script>
</body>
</html>
