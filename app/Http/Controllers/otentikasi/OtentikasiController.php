<?php

namespace App\Http\Controllers\otentikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\user;

class OtentikasiController extends Controller
{
    public function index(){
        return view('otentikasi.login');
    }
    public function login(Request $request){
        // $data = User::where('email',$request->email)->firstOrFail();
        // if ($data){
        //     if(\Hash::check($request->password,$data->password)){  
        //         session(['berhasil_login' => true]);
        //         return redirect('/dashboard');
        //     }
        // }

        // disini saya menggunakan login bawaan laravel jadi di bawah ini saya tidak pakai lagi
        // if(\Auth::attempt(['email' => $request->email, 'password' => $request->password])){
        //     return redirect('/dashboard');
        // }
        // return redirect('/')->with('message','email atau password salah');
    }

public function logout(Request $request){
    \Auth::logout();
    return redirect('/');
}

}
