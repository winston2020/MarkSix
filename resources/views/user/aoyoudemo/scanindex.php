<?php
error_reporting(0);
header("Content-type: text/html; charset=utf-8");
include 'config.php'; 
$pay_memberid = $pay_memberid;   //商户ID
$pay_orderid = 'sm'.date("YmdHis").rand(100000,999999);    //订单号
$pay_amount = "100";    //交易金额
$pay_applydate = date("Y-m-d H:i:s");  //订单时间
$pay_notifyurl = "http://pay.boxq0.cn/ceshizhifu/server.php";   //服务端返回地址
$pay_callbackurl = "http://pay.boxq0.cn/ceshizhifu/page.php";  //页面跳转返回地址




$pay_bankcode = "903";   //银行编码  902:微信扫码;903:支付宝扫码 ;908:QQ扫码 907 网银
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
//扫码
/*$native = array(
    "pay_memberid" => '10111',
    "pay_orderid" => 'LLF470435',
    "pay_amount" => $pay_amount,
    "pay_applydate" => '2018-05-10 15:53:34',
    "pay_bankcode" => $pay_bankcode,
    "pay_notifyurl" => 'http://sapi.5166you.com/utopay/api/AoyouPay/sync.pay',
    "pay_callbackurl" => 'http://sapi.5166you.com/utopay/api/AoyouPay/470435/callback2.pay',
);*/
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

$returndata=post_curls($tjurl,$native);


 
if(strpos($returndata,'"returncode":0')===false){
	 
	 
	 exit('失败');
}
$back=json_decode($returndata, true);
 
$url=$back["url"];
echo  '<img src="'.$url.'" >';
 

 function post_curls($url, $post)
    {
        $curl = curl_init(); // 启动一个CURL会话
        curl_setopt($curl, CURLOPT_URL, $url); // 要访问的地址
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); // 对认证证书来源的检查
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 1); // 从证书中检查SSL加密算法是否存在
        curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); // 模拟用户使用的浏览器
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); // 使用自动跳转
        curl_setopt($curl, CURLOPT_AUTOREFERER, 1); // 自动设置Referer
        curl_setopt($curl, CURLOPT_POST, 1); // 发送一个常规的Post请求
		 $post=http_build_query($post, '', '&'); 
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post); // Post提交的数据包
        curl_setopt($curl, CURLOPT_TIMEOUT, 30); // 设置超时限制防止死循环
        curl_setopt($curl, CURLOPT_HEADER, 0); // 显示返回的Header区域内容
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); // 获取的信息以文件流的形式返回
        $res = curl_exec($curl); // 执行操作
        if (curl_errno($curl)) {
            echo 'Errno'.curl_error($curl);//捕抓异常
        }
        curl_close($curl); // 关闭CURL会话
        return $res; // 返回数据，json格式
 
    }
 
?>
  