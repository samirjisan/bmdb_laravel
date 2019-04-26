<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB; 

class login_model extends Model
{
    public static function getLogInResult($username , $password){
        $data = DB::select("SELECT * from login where username = '$username' and password = '$password'"); 
        return $data;

        // var_dump($result);

        // if(isset($result)){
        //     // echo "string";
        //     $size = sizeof($result);
        //     // echo $size;
        // }

        // return $size;
    } 
}
