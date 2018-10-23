@extends('layout.app')

@section('body')


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
            @foreach($mssc as $item)
                <tr class="am-active">
                    <td>秒速赛车</td>
                    <td>{{$item->installment}}</td>
                    <td>{{$item->reward}}</td>
                    <td>{{$item->created_at}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endsection