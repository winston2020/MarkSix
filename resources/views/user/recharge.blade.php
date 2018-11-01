<?php
error_reporting(0);
header("Content-type: text/html; charset=utf-8");
include 'aoyoudemo/config.php';
include 'aoyoudemo/PostHelper.php';

$pay_bankcode = "933";   //银行编码  902:微信扫码;903:支付宝扫码 ;908:QQ扫码 907 网银
//扫码
$native = array(
    "pay_memberid" => $paydata['pay_memberid'],
    "pay_orderid" => $paydata['pay_orderid'],
    "pay_amount" => $paydata['pay_amount'],
    "pay_applydate" => $paydata['pay_applydate'],
    "pay_bankcode" => $paydata['pay_bankcode'],
    "pay_notifyurl" => $paydata['pay_notifyurl'],
    "pay_callbackurl" => $paydata['pay_callbackurl'],
);
ksort($native);
$md5str = "";
foreach ($native as $key => $val) {
    $md5str = $md5str . $key . "=" . $val . "&";
}
//echo($md5str . "key=" . $Md5key);
$sign = strtoupper(md5($md5str . "key=" . $Md5key));
$native["pay_md5sign"] = $sign; //签名值
$native['pay_attach'] = "1234|456"; //附加信息
$native['pay_productname'] ='充值';
//echo "<pre/>";
//print_R($native);

?>

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
    <script src="{{url('js/amazeui.min.js')}}"></script>
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
        <td><a href="/user/recharge">在线充值</a></td>
        <td><a href="/tixian">立即提现</a></td>
    </tr>
</table>
<form class="form-inline" method="post" id="pay" action="<?php echo $tjurl; ?>">
    <input value="" name="price" class="am-btn am-btn-primary am-btn-block am-round" >
    <?php
    foreach ($native as $key => $val) {
        echo '<input type="hidden" name="' . $key . '" value="' . $val . '">';
    }
    ?>
    <button type="button" id="submit" class="btn btn-success btn-lg">确认支付</button>
</form>
<script>
    $('#submit').click(function(){
        data = $('#pay').serialize()
        $.ajax({
            type:"POST",
            url:"/api/pay/create",
            data:data,
            datatype: "json",
            beforeSend:function(){

            },
            success:function(data){

            },
            complete: function(XMLHttpRequest, textStatus){
//                    alert(XMLHttpRequest.responseText);
//                    alert(textStatus);
            },
            error: function(){

            }
        });
    });
</script>

{{--<button type="button" class="am-btn am-btn-primary am-btn-block am-round">支付宝充值</button>--}}
{{--<hr>--}}
{{--<button type="button" class="am-btn am-btn-primary am-btn-block am-round">微信充值</button>--}}
{{--<hr>--}}
{{--<button type="button" class="am-btn am-btn-default am-btn-block am-round">网银充值</button>--}}


<div class="am-navbar am-navbar-default" data-am-widget="navbar">

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
</div>
<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="{{url('js/amazeui.ie8polyfill.min.js')}}"></script>
<![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->

<script src="{{url('js/app.js')}}"></script>
</body>
</html>
