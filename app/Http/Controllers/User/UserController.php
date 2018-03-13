<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\UserModel;
class UserController extends Controller
{
    //
        // data Vardump
        public function index(){
            return view('welcome/welcome');
        }
        public function register(Request $request){
            $register = new UserModel;
            $datas = $register->new_account($request->username,$request->password);
            dd($datas);
        }
        public function update(Request $request){
            $update = new UserModel;
            $update->namalengkap = $request->namalengkap;
            $update->username = $request->username;
            $update->password = $request->password;
            $update->ttl = $request->ttl;
            $update->umur = $request->umur;
            $update->agama = $request->agama;
            $update->asal = $request->asal;
            $update->suku = $request->suku;
            $update->hobi = $request->hobi;
            dd($update);
        }
}
