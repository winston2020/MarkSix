<?php
error_reporting(0);
header("Content-type: text/html; charset=utf-8");
include 'config.php'; 
$pay_memberid = $pay_memberid;   //商户ID
$pay_orderid = 'b'.date("YmdHis").rand(100000,999999);    //订单号
$pay_amount ='100';    //交易金额
$pay_applydate = date("Y-m-d H:i:s");  //订单时间
$pay_notifyurl = "http://pay.boxq0.cn/ceshizhifu/server.php";   //服务端返回地址
$pay_callbackurl="http://pay.boxq0.cn/ceshizhifu/page.php";




$pay_bankcode = "907";   //银行编码  902:微信扫码;903:支付宝扫码 ;908:QQ扫码 907 网银
//扫码
$native = array(
    "pay_memberid" => $pay_memberid,
    "pay_orderid" => $pay_orderid,
    "pay_amount" => $pay_amount,
    "pay_applydate" => $pay_applydate,
    "pay_bankcode" => $pay_bankcode,
    "pay_notifyurl" => $pay_notifyurl,
    "pay_callbackurl" => $pay_callbackurl,
);
ksort($native);
$md5str = "";
foreach ($native as $key => $val) {
    $md5str = $md5str . $key . "=" . $val . "&";
}

//echo  $md5str . "key=" . $Md5key;
$sign = strtoupper(md5($md5str . "key=" . $Md5key));
$native["pay_md5sign"] = $sign; //签名值
//echo $sign;
$native['pay_productname'] ='充值';
 
echo "<pre/>";
print_R($native);

 
?>
 
 <!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>支付Demo</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <div class="row" style="margin:15px;0;">
        <div class="col-md-12">
            <form class="form-inline" method="post" action="<?php echo $tjurl; ?>">
                银行： <select name="bankcode" class="input-sm">
 							<option value="POST">中国邮政储蓄银行</option>
                            <option value="CCB">中国建设银行</option>
                            <option value="ICBC">中国工商银行</option>
                            <option value="CGB">广发银行</option>
                            <option value="CEB">中国光大银行</option>
                            <option value="ECITIC">中信银行</option>
                            <option value="CIB">兴业银行</option>
                            <option value="ABC">中国农业银行</option>
                            <option value="BOC">中国银行</option>
                            <option value="HXB">华夏银行</option>
                            <option value="CMBC">中国民生银行</option>
                            <option value="CMBCHINA">招商银行</option>
                            <option value="BCCB">北京银行</option>
                            <option value="PAB">平安银行</option> 
                      </select>
                      <br />
                <?php
                foreach ($native as $key => $val) {
					 
					 
						 echo '<input type="hidden" name="' . $key . '" value="' . $val . '">';
					 
					 
				}
                ?>
                <button type="submit" class="btn btn-success btn-lg">支付</button>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

