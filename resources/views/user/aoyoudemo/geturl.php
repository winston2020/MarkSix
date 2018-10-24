<?php

error_reporting(0);
include 'config.php';
header("Content-type: text/html; charset=utf-8");
//$pay_memberid = trim($_REQUEST['pay_memberid']);   //商户ID
$pay_orderid = date("YmdHis").rand(100000,999999);    //订单号
$pay_amount = trim($_REQUEST['pay_amount']);    //交易金额
$pay_applydate = date("Y-m-d H:i:s");  //订单时间
$pay_notifyurl = "http://localhost:8080/php/server.php";   //服务端返回地址
$pay_callbackurl = "http://localhost:8080/php/page.php";  //页面跳转返回地址

$pay_bankcode = $_REQUEST['pay_bankcode'];   //银行编码  902:微信扫码;903:支付宝扫码 ;908:QQ扫码 907 网银
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
$sign = strtoupper(md5($md5str . "key=" . $Md5key));
$native["pay_md5sign"] = $sign;
$native['pay_attach'] = $_REQUEST['pay_attach'];//附加信息
$native['pay_productname'] ='基础服务';//商品名称
$res_json =  get_url($native,$tjurl);//返回数据
$res= json_decode($res_json,true);
//用URL进行加密处理保证参数不掉
if($res['returncode']=='00' && $res['url']!=''){
    $url = base64_encode($res['url']);
    $data = array();
    $data['url'] = $url;
    $data['returncode'] = '00';
    
}else{
    $data = array();
    $data['url'] = $res['url'];
    $data['returncode'] = $res['returncode'];
}
echo json_encode($data);

function get_url($post_data,$url){
    $ch = curl_init ();
    curl_setopt ( $ch, CURLOPT_URL,$url );
    curl_setopt ( $ch, CURLOPT_POST, 1 );
    curl_setopt ( $ch, CURLOPT_HEADER, 0 );
    curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt ( $ch, CURLOPT_POSTFIELDS, $post_data );
    $return = curl_exec ( $ch );
    curl_close ( $ch );
    return $return;
}
?>
