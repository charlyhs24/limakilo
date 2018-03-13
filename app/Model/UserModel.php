<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    //
    public $namalengkap = "Charly Haholongan Situmorang";//
    public $ttl   = "Sarko,24 September 1996";//
    public $agama = "Kristen Protestan";//
    public $umur  = "21 Tahun";//
    public $asal  = "Jambi";//
    public $username = "charlyhsitumorang";//
    public $password = "indonesiaraya";//
    public $suku  = "Batak";//
    public $hobi  = "Mendengarkan Musik dan Bermain Alat Musik (gitar)";//

    public function new_account($username,$password){
        $uname = $username;
        $pwd = $password;
        $data = array($uname,$pwd);
        return $data;
    }
}
