<?php

namespace App\Http\Controllers;

use App\Mssc;
use App\MsscBigCategory;
use App\MsscResult;
use App\MsscSmallCategory;
use App\MssscBigCategory;
use App\MssscSmallCategory;
use Illuminate\Http\Request;

class MsscController extends Controller
{
    public function index()
    {
        $category = MsscBigCategory::all();
        $big =  $category->toArray();
        foreach ($big as $key=>$item){
            $big[$key]['small'] = MsscSmallCategory::where(['category_id'=>$item['id']])->get()->toArray();
        }

        foreach ($big as $key=>$item){
            foreach ($item['small'] as $key1=>$value){
                $big[$key]['small'][$key1]['result'] = MsscResult::where(['small_category'=>$value['id']])->get()->toArray();
            }
        }
        $msssc = Mssc::where([])->orderby('id','desc')->limit(2)->get();
        return view('reward.mssc.index',compact('msssc','category','big'));
    }

    public function createinstallments()
    {
        $day = date('Y-m-d');
        $msssc = Mssc::where('created_at','like','%'.$day.'%')->orderby('id','desc')->first();
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
        $msssc = new Mssc();
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

}
