<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="{{url('i/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{url('i/app-icon72x72@2x.png')}}">
    <meta name="apple-mobile-web-app-title" content="秒速时时彩" />
    <link rel="stylesheet" href="{{url('css/amazeui.min.css')}}"/>
    <link rel="stylesheet" href="{{url('css/admin.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <script src="{{url('js/jquery.min.js')}}"></script>

</head>
<body>


        {{--<form id="dologin"  class="am-form">--}}
            {{--{{csrf_field()}}--}}
            {{--<label for="email">用户名:</label>--}}
            {{--<input type="text" name="name" id="name" value="" placeholder="请输入用户名">--}}
            {{--<br>--}}
            {{--<label for="password">手机号:</label>--}}
            {{--<input type="number" name="telphone" id="telphone" value="" placeholder="请输入手机号">--}}
            {{--<br>--}}
            {{--<label for="password">密码:</label>--}}
            {{--<input type="password" name="password" id="password" value="" placeholder="请输入密码">--}}
            {{--<br>--}}
            {{--<label for="password">重复密码:</label>--}}
            {{--<input type="password" name="repassword" id="repassword" value="" placeholder="请再次输入密码">--}}
            {{--<br>--}}

            {{--<br />--}}
            {{--<div class="am-cf">--}}
                {{--<input type="button" id="login" name="" value="注 册" class="am-btn am-btn-primary am-btn-sm am-fl">--}}
            {{--</div>--}}
        {{--</form>--}}
        <header data-am-widget="header"
                class="am-header am-header-default">
            <div class="am-header-left am-header-nav">
                @if(\Illuminate\Support\Facades\Auth::check())
                    <i class="am-header-icon am-icon-home"></i>
                @else
                    <a href="/regist" class="">
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
            <form id="dologin" method="post"  novalidate="novalidate">
                <div>
                    <input type="text" name="name" id="name" class="username valid" placeholder="用户名" autocomplete="off"
                           aria-required="true" aria-invalid="false">
                </div>
                <div>
                    <input type="text" name="telphone" id="telphone" class="username valid" placeholder="手机号" autocomplete="off"
                           aria-required="true" aria-invalid="false">
                </div>
                <div>
                    <input type="password" name="password" id="password" class="password" placeholder="密码" oncontextmenu="return false"
                           onpaste="return false">
                </div>
                <div>
                    <input type="password" name="repassword" id="repassword" class="password" placeholder="重复密码" oncontextmenu="return false"
                           onpaste="return false">
                </div>
                <button id="login" type="submit">注 册</button>
            </form>
            <a href="login">
                <button type="button" class="register-tis">已有账号,点击登录</button>
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
            $(function(){
                //按钮单击时执行

                $("#login").click(function(){
                  var name = $("#name").val()
                  var  telphone = $(" #telphone").val()
                  var  password = $(" #password").val()
                  var  repassword = $(" #repassword").val()
                  if (name ==''){
                       alert('用户名不能为空');
                  }
                  if (telphone == ''){
                      alert('电话不能为空');
                  }
                  if (password == ''){
                      alert('密码不能为空');
                  }
                  if(repassword == ''){
                      alert('重复不能为空');
                  }
                    
                    data = $('#dologin').serialize()
                    //Ajax调用处理
                    var html = $.ajax({
                        type: "POST",
                        url: "/user/regist",
                        data: data,
                        success:function (data) {
                            if (data.status==200){
                                window.location.href = "/";
                            }else{
                                alert(data.msg);
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

    <script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
    <script src="{{url('js/amazeui.ie8polyfill.min.js')}}"></script>
    <script src="{{url('js/amazeui.min.js')}}"></script>
    <script src="{{url('js/app.js')}}"></script>
</body>
</html>
