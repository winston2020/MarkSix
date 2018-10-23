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
</head>
<body style="background: white">
<header data-am-widget="header"
        class="am-header am-header-default">
    <div class="am-header-left am-header-nav">
        &rightleftharpoons; <a href="/user" style="font-size: 1.8rem">返回</a>
    </div>
    <h1 class="am-header-title">
        <a href="/user" class="">
            添加银行卡
        </a>
    </h1>
</header>
<br>
<div class="am-g">
    <div class="am-u-sm-1">&nbsp;</div>
    <div class="am-u-sm-10" style="color: red">为了更好保证用户的金币资金安全，请尽快绑定银行卡，完成账号实名认证！</div>
    <div class="am-u-sm-1">&nbsp;</div>
</div>
<br>
<div class="am-g">
    <div class="am-u-lg-12">
        <div class="am-input-group am-input-group-primary">
      <span class="am-input-group-label">
        开户银行
      </span>
            <input type="text" class="am-form-field" placeholder="输入开户银行" >
        </div>
    </div>
    <br><br>
    <div class="am-u-lg-12">
        <div class="am-input-group am-input-group-primary">
       <span class="am-input-group-label">
        开户姓名
      </span>
            <input type="text" class="am-form-field" placeholder="输入开户姓名" >
        </div>
    </div>
    <br><br>
    <div class="am-u-lg-12">
        <div class="am-input-group am-input-group-success">
       <span class="am-input-group-label">
        银行卡号
      </span>
            <input type="text" class="am-form-field" placeholder="银行卡必须是16~19位数字组成" >
        </div>
    </div>
    <br><br>
    <div class="am-u-lg-12">
        <div class="am-input-group am-input-group-warning">
       <span class="am-input-group-label">
        确认卡号
      </span>
            <input type="text" class="am-form-field" placeholder="请确认一遍" >
        </div>
    </div>
    <br><br>
    <div class="am-u-lg-12">
        <div class="am-input-group am-input-group-danger">
       <span class="am-input-group-label">
        开户行信息
      </span>
            <input type="text" class="am-form-field" placeholder="开户行的全称" >
        </div>
    </div>
</div>
<br>
<button type="button" class="am-btn am-btn-primary am-btn-block am-round">提交</button>
<button type="button" class="am-btn am-btn-danger   am-btn-block am-round">重置</button>
</body>
</html>
