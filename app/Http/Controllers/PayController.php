<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PayController extends Controller
{

    public function index(Request $request){
        $price = $request->input('price');
        if (empty($price)){
            return response()->json(['status'=>500,'msg'=>'充值金额不能为空']);
        }
        $pay_memberid = env('StoryPayId');   //商户ID
        $pay_orderid = 'c'.date("YmdHis").rand(100000,999999);    //订单号
        $pay_amount = $price*100;    //交易金额
        $pay_applydate = date("Y-m-d H:i:s");  //订单时间
        $pay_notifyurl = "http://pay.boxq0.cn/aoyoudemo/server.php";   //服务端返回地址
        $pay_callbackurl = "http://pay.boxq0.cn/aoyoudemo/page.php";  //页面跳转返回地址
        $pay_bankcode = "933";   //银行编码  902:微信扫码;903:支付宝扫码 ;908:QQ扫码 907 网银
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
        //echo($md5str . "key=" . $Md5key);
        $sign = strtoupper(md5($md5str . "key=" . env('Md5key')));
        $native["pay_md5sign"] = $sign; //签名值
        $native['pay_attach'] = "1234|456"; //附加信息
        $native['pay_productname'] ='充值';
        $client = new  Client();
        $r = $client->request('GET', env('TJURL'),[
            'seriesid'=>1,
            'pagination'=>1,
            'pagesize'=>1,
        ]);
        dd($r->getStatusCode());
    }

}
