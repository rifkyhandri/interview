<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'event';
    protected $fillable = ['id_event','corp','nama_event','nama_admin','kategori','penyelenggara','harga','status','ketentuan','tanggal','jam','description','file','header'];
    public static function head_notification(){
        $event = Event::first();
        return $event->nama_event;
    }
}
