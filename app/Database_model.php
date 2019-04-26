<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB; 

class Database_model extends Model
{
    
    public static function add_new_allocation($sql){
        $data =  DB::insert($sql);  
        if($data){
            return true;
        }
        else{
            return false;
        }
    }

    public static function add_product($sql){  
        $data = DB::insert($sql);  
        if($data){
            return true;
        }
        else{
            return false;
        }
    }

    public static function add_product_info($sql){ 
        $data = DB::insert($sql);  
        if($data){
            return true;
        }
        else{
            return false;
        }
    } 

    public static function get_products_by_type(){
        $data = DB::select("SELECT * from product where Status = 'Stock%20-%20Serviceable' order by Type"); 
        return $data; 
    }
    

}
