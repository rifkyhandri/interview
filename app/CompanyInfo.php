<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyInfo extends Model
{
    protected $table = 'company_profile';
    protected $fillable = ['kode_company','nama_company','jenis_company','alamat_company','nomor_telp_company','nomor_hp_company','fax_company','description'];
}
