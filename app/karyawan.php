<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    protected $table = 'karyawan';
    protected  $fillable = ['users_id','kode_company','kode_departemen','kode_karyawan','nama_karyawan','jenis_kelamin','email','nomor_telp','nomor_hp','tanggal_lahir','agama','alamat','avatar','jabatan'];
    
    public function getAvatar(){
        if(!$this->avatar){
            return asset('assets/images/baba.gif');
        }
        return asset('assets/images/'.$this->avatar);
    }
   
}
