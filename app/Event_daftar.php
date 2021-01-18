<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event_daftar extends Model
{
    protected $table = 'event_daftar';
    protected $fillable = ['id_event','nama_event','id_karyawan','nama_karyawan','id_pembayaran','jam_pembayaran','tanggal_pembayaran','status_pembayaran','status_event','harga','nama_bank','id_bank','komentar'];
}
