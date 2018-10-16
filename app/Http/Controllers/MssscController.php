<?php

namespace App\Http\Controllers;

use App\Msssc;
use Illuminate\Http\Request;

class MssscController extends Controller
{
    public function index()
    {
        return view('reward.msssc.index');
    }

    public function createinstallments(Request $request) //生成数字发送前端并保存至数据库
    {
         $day = date('Y-m-d');
         $msssc = Msssc::where('created_at','like','%'.$day.'%')->orderby('id','desc')->first();
         $day = date('Ymd');
         dd($day);
         if (empty($msssc)){
             $number = 1;
             $installment = $day.$number;
         }else{
             $number = $msssc->number+1;
             $installment = $day.$number;
         }

         $reward = rand(10000,99999);
         for($i=0;$i<strlen($reward);$i++){
             $rewarddata[] = substr($reward,$i,1);
         }

         $msssc = new  Msssc();
         $msssc->installment = $installment;
         $msssc->reward = $reward;
         $msssc->number = $number;
         $bool =  $msssc->save();
         $msssc->reward = $rewarddata;
         if ($bool){
             return response()->json(['status'=>200,'data'=>$msssc]);
         }else{
             return response()->json(['status'=>500,'data'=>'错误']);
         }
    }

    public function receivejudgements(Request $request){ //接收下注，进行下注判断，并把下注结果存入数据库



    }










}
