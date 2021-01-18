<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IzinKaryawan extends Model
{
    protected $table = 'izin_karyawan';
    protected $fillable = ['id','nomor_izin','id_karyawan','nama_karyawan','alasan','dari_jam','sampai_jam','tanggal','status_atasan','status_hr','status_security','status_kembali','status_kembalijam','status_kembalitanggal'];
    
}
