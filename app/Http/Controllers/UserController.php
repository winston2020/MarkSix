<?php

namespace App\Http\Controllers;

use App\System;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function login()
    {
        return view('user.login');
    }
    public function tixian()
    {
        return view('user.tixian');
    }
    public function information()
    {
        return view('user.information');
    }
    public function password()
    {
        return view('user.password');
    }
    public function message()
    {
        return view('user.message');
    }
    public function gold()
    {
        return view('user.gold');
    }
    public function withdraw()
    {
        return view('user.withdraw');
    }
    public function bank()
    {
        return view('user.bank');
    }
    public function addbank()
    {
        return view('user.addbank');
    }
    public function extension()
    {
        return view('user.extension');
    }

    public function service()
    {
        return view('user.service');
    }
    public function dologin(Request $request)
    {
        $username = $request->input('name');
        $password = $request->input('password');
        $loginbool = Auth::attempt(['name'=>$username,'password'=>$password]);
        if ($loginbool){
            return response()->json(['status'=>200,'msg'=>'登陆成功']);
        }else{
            return Response()->json(['status'=>500,'msg'=>'用户名或密码不正确']);
        }
    }

    public function doregist(Request $request)
    {
        $username = $request->input('name');
        $telphone = $request->input('telphone');
        $password = $request->input('password');
        $repassword = $request->input('repassword');
        if (empty($username)){
            return response()->json(['status'=>500,'msg'=>'用户名不能为空']);
        }
        if (empty($telphone)){
            return response()->json(['status'=>500,'msg'=>'手机号不能为空']);
        }
        if (empty($password)){
            return response()->json(['status'=>500,'msg'=>'密码不能为空']);
        }
        if ($repassword != $password){
            return response()->json(['status'=>500,'msg'=>'两次密码不一样']);
        }

        $userdata = User::where(['name'=>$username])->first();
        if ($userdata){
            return response()->json(['status'=>500,'msg'=>'该用户名已经被注册']);
        }

        $system = System::where([])->first();
        if ($system->largess =null){
            $system->largess = 0;
        }

        $user = new User();
        $user->name = $username;
        $user->telphone = $telphone;
        $user->password = Hash::make($password);
        $user->price = $system->largess;
        $bool = $user->save();
        if ($bool){
            Auth::loginUsingId($user->id);
            return response()->json(['status'=>200,'msg'=>'注册成功']);
        }else{
            return Response()->json(['status'=>500,'msg'=>'注册失败']);
        }
    }

    public function regist()
    {
        return view('user.regist');
    }

    public function recharge()
    {
        return view('user.recharge');
    }
}
