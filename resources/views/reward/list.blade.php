@extends('layout.app')

@section('body')
    <ul data-am-widget="gallery" class="am-gallery am-avg-sm-2
  am-avg-md-3 am-avg-lg-4 am-gallery-default" data-am-gallery="{ pureview: false }" >
        <li>
            <div class="am-gallery-item" style="text-align: center; color: blue;background-color: #0e90d2">
                <a href="/reward/msssc" style="text-align: center;color: white" class="">
                   秒速时时彩
                </a>
            </div>
        </li>
        <li>
            <div class="am-gallery-item" style="text-align: center;color: blue;background-color: #0e90d2">
                <a href="/reward/mssc" style="text-align: center;color: white" class="">
                    秒速赛车
                </a>
            </div>
        </li>
    </ul>


    <table class="am-table am-table-bordered am-table-striped am-table-hover" style="margin-top: 20px">
        <thead>
        <tr>
            <th>彩种</th>
            <th>期数</th>
            <th>开奖结果</th>
            <th>开奖日期</th>
        </tr>
        </thead>
        <tbody>
            @foreach($msssc as $item)
                <tr class="am-active">
                <td>秒速时时彩</td>
                <td>{{$item->installment}}</td>
                <td>{{$item->reward}}</td>
                <td>{{$item->created_at}}</td>
                </tr>
            @endforeach
            @foreach($mssc as $item)
                <tr class="am-active">
                    <td>秒速时时彩</td>
                    <td>{{$item->installment}}</td>
                    <td>{{$item->reward}}</td>
                    <td>{{$item->created_at}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endsection