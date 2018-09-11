@extends('layout.app')

@section('body')
    <script src="{{url('js/vue.js')}}"></script>
    <script src="{{url('js/jquery.min.js')}}"></script>
    <div style="border: 1px solid rgb(214, 214, 214);" id="msssc">
        <div class="am-g">
            <div class="am-u-sm-4" id="befor"></div>
            <div class="am-u-sm-8" id="beforward"></div>
        </div>
        <div class="am-g">
            <div class="am-u-sm-4" style="background-color: red" id="now">4</div>
            <div class="am-u-sm-8" style="background-color: black" id="nows">8</div>
        </div>
    </div>
<p></p>
    <script type="text/javascript">
        var dataplayer = new Vue({
            el:'#beforward',
            data:{
                beforward:[],
                count:'',
                lastseriesid:'',
            }

        })

        function settime() {
            var time = 6;
            var p = document.getElementById("time");
            var set = setInterval(function() {
                time--;
               console.log(time)
                if(time === 3) {
                    console.log(time+'继续');
                }
                if(time === 0){
                    clearInterval(set);
                    getinstall()
                    settime()
                }

            }, 1000);
        }
        settime()


        function getinstall() {
            $.ajax({
                url:"/reward/msssc/add", //处理页面的路径
                data:{ "_token": "{{ csrf_token() }}"}, //要提交的数据是一个JSON
                type:"POST", //提交方式
                dataType:"JSON", //返回数据的类型
                //TEXT字符串 JSON返回JSON XML返回XML
                success:function(data){ //回调函数 ,成功时返回的数据存在形参data里
                    if (data.status == 200){
                        $("#befor").text(data.data.installment+'期');
                        reward = JSON.parse(data.data.reward)
                        console.log(reward)
                        $("#beforward").html( data.data.reward);
                    }
                }
            });

        }
        
    </script>

@endsection