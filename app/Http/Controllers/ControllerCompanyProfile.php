<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerCompanyProfile extends Controller
{
    public function companyProfile(){

        $nama_web = \App\WebNames::get();
        $nama_Comp = \App\CompanyInfo::get();
        return view('dashboard/company_profile',['nama_comps'=>$nama_Comp,'nama_web'=>$nama_web]);
   }
}
