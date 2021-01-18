<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product_big;
class ControllerProductCat extends Controller
{   
    public function index(){
    $data_sub = DB::table('product_cat_sub')
    ->Join('product_cat_big', 'product_cat_sub.id_cat_big', '=', 'product_cat_big.id_cat_big')   
    ->select('product_cat_sub.*', 'product_cat_big.id_cat_big', 'product_cat_big.nama_cat_big') 
    ->groupBy('id_cat_sub')
    ->get();
    $data_sm = DB::table('product_cat_sm')
    ->leftJoin('product_cat_big', 'product_cat_sm.id_cat_big', '=', 'product_cat_big.id_cat_big')    
    ->leftJoin('product_cat_sub', 'product_cat_sm.id_cat_sub', '=', 'product_cat_sub.id_cat_sub')    
    ->select('product_cat_sm.*', 'product_cat_big.id_cat_big', 'product_cat_big.id_cat_big' ,'product_cat_sub.id_cat_sub', 'product_cat_sub.id_cat_sub' ) 
    ->groupBy('id_cat_sm')
    ->get();
    $data = 100;
    $sub_data = \App\Product_sub::all();
    $big_data = \App\Product_big::all();
    $noUrutAkhir = \App\Product_big::max('id_cat_big');
    $data2 = sprintf(abs($noUrutAkhir + 1));
    return view('product_cat/products',['big_cat'=>$big_data,'kode_big'=>$data2,'data_sub_join'=>$data_sub,'data_sm_join'=>$data_sm,'data_sub'=>$sub_data]);
    }
    public function create(Request $request){
        $data = \App\Product_big::create($request->all());
        return redirect('/product_categori');
    }

    public function delete($id){
        $data_big = \App\Product_big::find($id);
        $data_big->delete();

        return redirect('/product_categori');
    }
    public function delete_sub($id){
        $data_sub = \App\Product_sub::find($id);
        $data_sub->delete();

        return redirect('/product_categori');
    }
    public function delete_sm($id){
        $data_sub = \App\Product_sm::find($id);
        $data_sub->delete();

        return redirect('/product_categori');
    }
   
    public function update(Request $request, $id)
    {
        $suplier = \App\Product_big::find($id);
        $suplier->update($request->all());
        return redirect ('/product_categori')->with('ubah','data berhasil di ubah');
    }
    public function edit($id)
    {
        $product_sm = \App\Product_big::find($id);
        return redirect('/product_categori',['product_sm'=>$product_sm]);
    }

    public function create_sub(Request $request){
        $data = \App\Product_sub::create($request->all());
        return redirect('/product_categori');
    }
    public function create_sm(Request $request){
        $data = \App\Product_sm::create($request->all());
        return redirect('/product_categori');
    }
}
