<?php

namespace App\Http\Controllers;

use App\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function geren()
    {
        return view('user.geren');
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

        $user = new User();
        $user->name = $username;
        $user->telphone = $telphone;
        $user->password = $password;
        $user->price = 0;
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
}
