<?php

namespace App\Http\Controllers;

use App\MsscResult;
use App\Msssc;
use App\MssscBigCategory;
use App\MssscResult;
use App\MssscSmallCategory;
use App\Result;
use Illuminate\Http\Request;

class MssscController extends Controller
{
    public function index()
    {
        $big =  MssscBigCategory::all()->toArray();
        foreach ($big as $key=>$item){
            $big[$key]['small'] = MssscSmallCategory::where(['category_id'=>$item['id']])->get()->toArray();
        }

        foreach ($big as $key=>$item){
            foreach ($item['small'] as $key1=>$value){
                $big[$key]['small'][$key1]['result'] = MssscResult::where(['small_category'=>$value['id']])->get()->toArray();
            }
        }

        $msssc = Msssc::where([])->orderby('id','desc')->limit(2)->get();
        return view('reward.msssc.index',compact('msssc','caterote','big'));
    }

    public function createinstallments(Request $request) //生成数字发送前端并保存至数据库
    {
         $day = date('Y-m-d');
         $msssc = Msssc::where('created_at','like','%'.$day.'%')->orderby('id','desc')->first();
         $day = date('Ymd');

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

    public function result()
    {
       $lastresult =  Msssc::where([])->orderby('created_at','desc')->first();
       $current_data =  Result::where(['installment_id'=>$lastresult->id])->get();

    }

    public function create_msssc_result()
    {
        for ($i=0;$i<5;$i++){
            $res = new MsscResult();
            $res->big_category = 4;
            $res->small_category = 18;
            $res->result = '1-5球';
            $res->odds = 9.9;
            $res->created_at = '2018-10-23 12:03:43';
            $res->updated_at = '2018-10-23 12:03:43';
            $res->save();
        }
    }



}
