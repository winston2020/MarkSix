<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <link rel="stylesheet" href="{{url('css/msssc.css')}}">
    <link rel="stylesheet" href="{{url('css/amazeui.min.css')}}"/>
    <script src="{{url('js/jquery.min.js')}}"></script>
    <title>秒速时时彩</title>
    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="{{url('js/amazeui.ie8polyfill.min.js')}}"></script>
    <script src="{{url('js/amazeui.min.js')}}"></script>
    <script src="{{url('js/app.js')}}"></script>
    <script src="{{url('js/jquery.min.js')}}"></script>
    <style>
        .selected{
            background: red;
            color: palegoldenrod;
        }
        .am-nav-tabs>li{
            margin-left: 20px;
        }
        .yc{
            display: none;
        }
    </style>
</head>
<body>
<div id="app">
    <div class="page-tabbar">
        <header data-am-widget="header"
                class="am-header am-header-default">
            <div class="am-header-left am-header-nav">
                <span style="font-size: 15px" id="gohome">首页</span>
            </div>
            <script>
                $('#gohome').click(function(){
                    window.location.href ='{{url('')}}';
                });
            </script>

            <h1 class="am-header-title">
                <a href="#" class="">
                    <span style="font-size: 17px">秒速时时彩</span>
                </a>
            </h1>

            <div class="am-header-right am-header-nav">
                {{--{{\Illuminate\Support\Facades\Auth::user()->price}}金币--}}
                <span style="font-size: 15px">0.00金币</span>
            </div>
        </header>
        <div style="border: 1px solid rgb(214, 214, 214); margin-top: 5px; margin-bottom: 5px; font-size: 14px;">
            <table style="width: 100%; padding: 10px;">
                <tr>
                    <td height="40px" align="left" style="width: 35%;"><a id="beforInstallments">{{$msssc[1]->installment}}期 </a></td>
                    <td align="right" style="width: 65%;">
                        <div style="width: 100%;">
                            <ul style="padding: 0px; margin: 0px;">
                                <li style="float: left; width: 25%; list-style-type: none; text-align: -webkit-center; line-height: 20px;">
                                    <div class="arrow"></div>
                                </li>
                                @foreach(str_split($msssc[0]->reward) as $item)
                                <li style="float: left; width: 15%; list-style-type: none;">
                                    <div style="width: 20px; height: 20px; background-color: rgb(255, 0, 0); border-radius: 10px; margin: 1px;">
                                        <span style="height: 20px; line-height: 20px; display: block; color: rgb(255, 255, 255); text-align: center;">{{$item}}</span>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td height="40px" align="left" style="width: 35%;" id="nowinstallment" >{{$msssc[0]->installment}}期</td>
                    <td align="right" style="width: 70%;">
                        <!----><font>封盘:<span id="s"></span>
                            &nbsp;&nbsp;&nbsp;&nbsp;开奖:<span id="kjs"></span>
                        </font>
                    </td>
                </tr>
                <script>
                    var s = 5;    //设置秒
                    var kjs = 20;    //设置开奖秒

                    function showtime(){

                        document.getElementById('s').innerHTML = s;
                        if(s>0){
                            s = s-1;
                        }
                        console.log('封盘:'+s)
                        if(s==0){   //当时间为0分1秒时，暂停
                            document.getElementById('s').innerHTML = "封盘中";
                            $('#prezero').attr("style",'color:red')
                            $('#kjprezeor').attr("style",'color:red')
                            $('#s').attr("style",'color:red')
                            $('#kjs').attr("style",'color:red')
                            $(".bottom-bar").addClass("yc");
                        }
                    }


                    function kjtime(){
                        document.getElementById('kjs').innerHTML = kjs;
                        console.log('开奖:'+kjs)
                        showtime()
                        kjs = kjs-1;
                        if(kjs<0){   //当时间为0分0秒时，暂停
                            kjm = 0;  //设置分
                            kjs = 75; //设置秒
                            s=60;
                            $('#prezero').attr("style",'color:black')
                            $('#kjprezeor').attr("style",'color:black')
                            $('#s').attr("style",'color:black')
                            $('#kjs').attr("style",'color:black')
                            $(".bottom-bar").removeClass("yc");
                        }
                    }

                    var settime1 = setInterval(function(){
                        kjtime();
                    },1000);

                </script>
            </table>
        </div>
        <div class="am-tabs" data-am-tabs >
            <ul class="am-tabs-nav am-nav am-nav-tabs">
                <li class="am-active"><a href="#tab1">两面</a></li>&nbsp;&nbsp;&nbsp;
                <li><a href="#tab2">1-5球</a></li>
                <li><a href="#tab3">前中后</a></li>
            </ul>

            <div class="am-tabs-bd" style=" overflow-y:auto;">
                <div class="am-tab-panel am-fade am-in am-active" id="tab1">
                    <div class="mint-tab-container-item" style="border: 1px solid rgb(214, 214, 214);">
                        <ul style="padding: 5px;">
                            <li class="container-li3"><p
                                        style="text-align: center; line-height: 30px; vertical-align: top; font-size: 14px;">
                                    总和、龙虎</p></li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001001">
                                    <!----> <label class="mint-button-text">总和大 <span
                                                style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001002">
                                    <!----> <label class="mint-button-text">总和小 <span
                                                style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001003">
                                    <!----> <label class="mint-button-text">总和单 <span
                                                style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001004">
                                    <!----> <label class="mint-button-text">总和双 <span
                                                style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li1">
                                <button class="mint-button mint-button--default mint-button--large" id="105001005">
                                    <!----> <label class="mint-button-text">龙 <span
                                                style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li1">
                                <button class="mint-button mint-button--default mint-button--large" id="105001006">
                                    <!----> <label class="mint-button-text">虎 <span
                                                style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li1">
                                <button class="mint-button mint-button--default mint-button--large" id="105001007">
                                    <!----> <label class="mint-button-text">和 <span
                                                style="font-size: 10px; font-weight: bold;">9</span></label></button>
                            </li>
                            <li class="container-li3"><p style="text-align: center; font-size: 14px;">第一球</p></li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001008">
                                    <!----> <label class="mint-button-text">大 <span
                                                style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001009">
                                    <!----> <label class="mint-button-text">小 <span
                                                style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001010">
                                    <!----> <label class="mint-button-text">单 <span
                                                style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001011">
                                    <!----> <label class="mint-button-text">双 <span
                                                style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li3"><p style="text-align: center; font-size: 14px;">第二球</p></li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001012">
                                    <!----> <label class="mint-button-text">大 <span
                                                style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001013">
                                    <!----> <label class="mint-button-text">小 <span
                                                style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001014">
                                    <!----> <label class="mint-button-text">单 <span
                                                style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001015">
                                    <!----> <label class="mint-button-text">双 <span
                                                style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li3"><p style="text-align: center; font-size: 14px;">第三球</p></li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001016">
                                    <!----> <label class="mint-button-text">大 <span
                                                style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001017">
                                    <!----> <label class="mint-button-text">小 <span
                                                style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001018">
                                    <!----> <label class="mint-button-text">单 <span
                                                style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001019">
                                    <!----> <label class="mint-button-text">双 <span
                                                style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li3"><p style="text-align: center; font-size: 14px;">第四球</p></li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001020">
                                    <!----> <label class="mint-button-text">大 <span
                                                style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001021">
                                    <!----> <label class="mint-button-text">小 <span
                                                style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001022">
                                    <!----> <label class="mint-button-text">单 <span
                                                style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001023">
                                    <!----> <label class="mint-button-text">双 <span
                                                style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li3"><p style="text-align: center; font-size: 14px;">第五球</p></li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001024">
                                    <!----> <label class="mint-button-text">大 <span
                                                style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001025">
                                    <!----> <label class="mint-button-text">小 <span
                                                style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001026">
                                    <!----> <label class="mint-button-text">单 <span
                                                style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001027">
                                    <!----> <label class="mint-button-text">双 <span
                                                style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="am-tab-panel am-fade" id="tab2" style="height: 600px" >
                    <div class="mint-tab-container-item" style="border: 1px solid rgb(214, 214, 214); " >
                        <ul style="padding: 5px;" >
                            <li class="container-li3"><p style="text-align: center; font-size: 14px;">第一球</p></li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002001">
                                    <!----> <label class="mint-button-text">0 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002002">
                                    <!----> <label class="mint-button-text">1 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002003">
                                    <!----> <label class="mint-button-text">2 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002004">
                                    <!----> <label class="mint-button-text">3 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002005">
                                    <!----> <label class="mint-button-text">4 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002006">
                                    <!----> <label class="mint-button-text">5 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002007">
                                    <!----> <label class="mint-button-text">6 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002008">
                                    <!----> <label class="mint-button-text">7 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002009">
                                    <!----> <label class="mint-button-text">8 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002010">
                                    <!----> <label class="mint-button-text">9 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li3" ><p style="text-align: center; font-size: 14px;">第二球</p></li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002011">
                                    <!----> <label class="mint-button-text">0 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002012">
                                    <!----> <label class="mint-button-text">1 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002013">
                                    <!----> <label class="mint-button-text">2 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002014">
                                    <!----> <label class="mint-button-text">3 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002015">
                                    <!----> <label class="mint-button-text">4 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002016">
                                    <!----> <label class="mint-button-text">5 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002017">
                                    <!----> <label class="mint-button-text">6 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002018">
                                    <!----> <label class="mint-button-text">7 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002019">
                                    <!----> <label class="mint-button-text">8 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002020">
                                    <!----> <label class="mint-button-text">9 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li3" ><p style="text-align: center; font-size: 14px;">第三球</p></li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002021">
                                    <!----> <label class="mint-button-text">0 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002022">
                                    <!----> <label class="mint-button-text">1 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002023">
                                    <!----> <label class="mint-button-text">2 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002024">
                                    <!----> <label class="mint-button-text">3 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002025">
                                    <!----> <label class="mint-button-text">4 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002026">
                                    <!----> <label class="mint-button-text">5 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002027">
                                    <!----> <label class="mint-button-text">6 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002028">
                                    <!----> <label class="mint-button-text">7 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002029">
                                    <!----> <label class="mint-button-text">8 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002030">
                                    <!----> <label class="mint-button-text">9 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li3"><p style="text-align: center; font-size: 14px;">第四球</p></li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002031">
                                    <!----> <label class="mint-button-text">0 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002032">
                                    <!----> <label class="mint-button-text">1 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002033">
                                    <!----> <label class="mint-button-text">2 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002034">
                                    <!----> <label class="mint-button-text">3 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002035">
                                    <!----> <label class="mint-button-text">4 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002036">
                                    <!----> <label class="mint-button-text">5 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002037">
                                    <!----> <label class="mint-button-text">6 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002038">
                                    <!----> <label class="mint-button-text">7 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002039">
                                    <!----> <label class="mint-button-text">8 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002040">
                                    <!----> <label class="mint-button-text">9 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li3"><p style="text-align: center; font-size: 14px;">第五球</p></li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002041">
                                    <!----> <label class="mint-button-text">0 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002042">
                                    <!----> <label class="mint-button-text">1 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002043">
                                    <!----> <label class="mint-button-text">2 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002044">
                                    <!----> <label class="mint-button-text">3 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002045">
                                    <!----> <label class="mint-button-text">4 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002046">
                                    <!----> <label class="mint-button-text">5 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002047">
                                    <!----> <label class="mint-button-text">6 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002048">
                                    <!----> <label class="mint-button-text">7 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002049">
                                    <!----> <label class="mint-button-text">8 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002050">
                                    <!----> <label class="mint-button-text">9 <span
                                                style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="am-tab-panel am-fade" id="tab3">
                    <div class="mint-tab-container-item" style="border: 1px solid rgb(214, 214, 214); ">
                        <ul style="padding: 5px;">
                            <li class="container-li3"><p style="text-align: center; font-size: 14px;">前三</p></li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105003001">
                                    <!----> <label class="mint-button-text">豹子 <span
                                                style="font-size: 10px; font-weight: bold;">75</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105003002">
                                    <!----> <label class="mint-button-text">顺子 <span
                                                style="font-size: 10px; font-weight: bold;">14.5</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105003003">
                                    <!----> <label class="mint-button-text">对子 <span
                                                style="font-size: 10px; font-weight: bold;">3.3</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105003004">
                                    <!----> <label class="mint-button-text">半顺 <span
                                                style="font-size: 10px; font-weight: bold;">2.5</span></label></button>
                            </li>
                            <li class="container-button-li3">
                                <button class="mint-button mint-button--default mint-button--large" id="105003005">
                                    <!----> <label class="mint-button-text">杂六 <span
                                                style="font-size: 10px; font-weight: bold;">3</span></label></button>
                            </li>
                            <li class="container-li3"><p style="text-align: center; font-size: 14px;">中三</p></li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105003006">
                                    <!----> <label class="mint-button-text">豹子 <span
                                                style="font-size: 10px; font-weight: bold;">75</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105003007">
                                    <!----> <label class="mint-button-text">顺子 <span
                                                style="font-size: 10px; font-weight: bold;">14.5</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105003008">
                                    <!----> <label class="mint-button-text">对子 <span
                                                style="font-size: 10px; font-weight: bold;">3.3</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105003009">
                                    <!----> <label class="mint-button-text">半顺 <span
                                                style="font-size: 10px; font-weight: bold;">2.5</span></label></button>
                            </li>
                            <li class="container-button-li3">
                                <button class="mint-button mint-button--default mint-button--large" id="105003010">
                                    <!----> <label class="mint-button-text">杂六 <span
                                                style="font-size: 10px; font-weight: bold;">3</span></label></button>
                            </li>
                            <li class="container-li3"><p style="text-align: center; font-size: 14px;">后三</p></li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105003011">
                                    <!----> <label class="mint-button-text">豹子 <span
                                                style="font-size: 10px; font-weight: bold;">75</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105003012">
                                    <!----> <label class="mint-button-text">顺子 <span
                                                style="font-size: 10px; font-weight: bold;">14.5</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105003013">
                                    <!----> <label class="mint-button-text">对子 <span
                                                style="font-size: 10px; font-weight: bold;">3.3</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105003014">
                                    <!----> <label class="mint-button-text">半顺 <span
                                                style="font-size: 10px; font-weight: bold;">2.5</span></label></button>
                            </li>
                            <li class="container-button-li3">
                                <button class="mint-button mint-button--default mint-button--large" id="105003015">
                                    <!----> <label class="mint-button-text">杂六 <span
                                                style="font-size: 10px; font-weight: bold;">3</span></label></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-bar" style="z-index: 999">
            <ul style="padding: 0px; margin: 0px;">
                <li style="float: left; margin-left: 3px; margin-top: 3px; margin-bottom: 5px; list-style-type: none;">
                    <span style="line-height: 48px; color: red;">已选择 <span id="number"></span> 注</span></li>
                <li style="float: left; margin-bottom: 5px; margin-top: 3px; list-style-type: none;">
                    <div style="height: 48px; width: 100%; margin: 0px 0px 0px 3px; padding: 0px;"><a
                                class="mint-cell mint-field is-nolabel"
                                style="width: 92px; margin: 0px; padding: 0px; height: 40px;"><!---->
                            <div class="mint-cell-left"></div>
                            <div class="mint-cell-wrapper">
                                <div class="mint-cell-title"><!----> <span class="mint-cell-text"></span> <!----></div>
                                <div class="mint-cell-value"><input placeholder="输入金额" number="true" type="number"
                                                                    class="mint-field-core">
                                    <div class="mint-field-clear" style="display: none;"><i
                                                class="mintui mintui-field-error"></i></div>
                                    <span class="mint-field-state is-default"><i
                                                class="mintui mintui-field-default"></i></span>
                                    <div class="mint-field-other"></div>
                                </div>
                            </div>
                            <div class="mint-cell-right"></div> <!----></a></div>
                </li>
                <li style="float: right; margin-right: 3px; margin-top: 9px; list-style-type: none;">
                    <button class="mint-button mint-button--danger mint-button--normal" id="restart"><!----> <label
                                class="mint-button-text" >重置</label></button>
                </li>
                <li style="float: right; margin-right: 3px; margin-top: 9px; list-style-type: none;">
                    <button class="mint-button mint-button--primary mint-button--normal"><!----> <label
                                class="mint-button-text">下注</label></button><!----></li>
            </ul>
        </div>
    </div>
</div>
<script>
    $(".mint-tab-container-item>ul>li>button").click(function(){
        $(this).toggleClass("selected");
    })
</script>
<script>
    ppp=function(){
        var idnumber=$('.selected');
        $("#number").text(idnumber.length)
    }
    var t2 = window.setInterval("ppp()",200);
</script>
<div class="mint-msgbox-wrapper" style="position: absolute; z-index: 2005;">
    <div class="mint-msgbox" style="display: none;">
        <div class="mint-msgbox-header">
            <div class="mint-msgbox-title">投注失败，余额不足！</div>
        </div> <!---->
        <div class="mint-msgbox-btns">
            <button class="mint-msgbox-btn mint-msgbox-cancel " style="display: none;">取消</button>
            <button class="mint-msgbox-btn mint-msgbox-confirm ">确定</button>
        </div>
    </div>
</div>

<script>
    $(function(){
        setInterval(aa,90000);
        function aa(){
            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' }
            });
            $.ajax({
                type:"POST",
                url:"/reward/msssc/add",
                data:{},
                datatype: "json",//"xml", "html", "script", "json", "jsonp", "text".
                beforeSend:function(){
                    $("#msg").html("logining");
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
        }
    })
</script>
</body>
</html>