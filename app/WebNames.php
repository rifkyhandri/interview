<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebNames extends Model
{
    protected $table = 'web_names';
    protected $fillable = ['nama_web','nama_admin','status'];

    public static function get_name(){
        $web_names = WebNames::get()->first();
        if (!$web_names){
            return 'Judul.com';
        }else{
            return $web_names->nama_web; 
        }
    }

}
