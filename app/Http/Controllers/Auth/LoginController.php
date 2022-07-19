<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //

    public function getLogin(){
        return view('auth.index');
    }

    public function postLogin(Request $request){
//        dd($request->all());
        //kiem tra du lieu dau vao
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];
        $messages = [
            'email.required' => 'Email bắt buộc nhập',
            'email.email' => 'Bắt buộc nhập định dạng email',
            'password.required' => 'Password bắt buộc nhập'
        ];

        $validators = Validator::make($request->all(),$rules,$messages);
//        dd($validators);
        if($validators->fails()){
            return redirect('login')->withErrors($validators)->withInput();
        }else{
           $email = $request->input('email');
           $password = $request->input('password');
           if(Auth::attempt(['email' => $email , 'password' => $password])){
               return redirect('update');
           }
           else{
               Session::flash('error','Email hoặc mật khẩu không chính xác');
               return redirect('login');
           };

        }

    }

}
