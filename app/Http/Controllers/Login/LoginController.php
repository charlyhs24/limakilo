<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\UserModel;
class LoginController extends Controller
{
    public function index(){
        $count = 0;
        return view('login&register/login',['counts'=>$count]);
    }
    
    public function login(Request $request){
        $login = new UserModel;
        if (($login->username != $request->username) || ($login->password!=$request->password)) {
            $count=1;
            return view('Login&register/login',['counts'=>$count]);
        }else{
            return view('User/dashboard',['logins'=>$login]);
        }
    }

}
