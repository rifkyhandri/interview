<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Stock;
class ControllerStock extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub = DB::table('masuk_barang_sub')->get();
        // DB::table('masuk_barang')
        // ->Join('masuk_barang','masuk_barang_sub.kode_item_grup','=','masuk_barang.kode_item_grup')
        // ->select('masuk_barang_sub.*','masuk_barang')
        // ->groupBy('kode_cat')->get();
        $stock_sum = DB::table('masuk_barang_sub')->get()->sum('qty');
        $brand = \App\Brand::all();
        $kode_utama = \App\masuk_barang_sub::max('kode_produk');
        $kode =  $kode_utama +1;
        $product_sm = \App\Product_sm::all();
        $product_sub = \App\Product_sub::all();
        $product_big = \App\Product_big::pluck('nama_cat_big','id_cat_big');
        $stock_in = \App\Stock::paginate(10);
        $suplier = \App\Suplai::all();
        $product_sub_max = \App\Product_sub::max('id_cat_sub');
        $product_sub_rand = date('Ymd').rand(0,999).$product_sub_max + 1;
        $product_big_rand = rand(9,9999999);
        $warehouse = DB::table('warehouse')->get();
        return view ('Stock.stock_index',['product_big'=>$product_big,'stock_in'=>$stock_in,'cat_sm'=>$product_sm,'stock_sub'=>$sub,'brand'=>$brand,'cat_sub'=>$product_sub,'warehouse'=>$warehouse,'suplai'=>$suplier,'kode_sub'=>$kode,'stock_sum'=>$stock_sum,'big_rand'=>$product_big_rand,'sub_rand'=>  $product_sub_rand]);
    }
    public function catsub($id){
  
    $states = DB::table("product_cat_sub")->where("id_cat_big",$id)->pluck("nama_cat_sub","id_cat_sub");
        return json_encode($states);
    }
    public function catsm($id){
  
        $sm_cat = DB::table("product_cat_sm")->where("id_cat_sub",$id)->pluck("nama_cat_sm","id_cat_sm");
        return json_encode($sm_cat);
    }
    public function tambah()
    { 
        $kategori = \App\Kategory::all();  
        $brand = \App\Brand::all();
        return view ('Stock.create_stock',['brand'=>$brand,'kategory'=>$kategori]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    $stock = \App\Stock::create($request->all());
    return redirect('/stock_in')->with('sukses','data berhasil disimpan');
    }
    public function create_sub(Request $request)
    {
        
    $stock = \App\masuk_barang_sub::create($request->all());
    return redirect('/stock_in')->with('sukses','data berhasil disimpan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $data =DB::table('masuk_barang')
        ->leftJoin('masuk_barang_sub','masuk_barang.kode_item_grup', '=','masuk_barang_sub.kode_item_grup')
        ->where('masuk_barang.kode_item_grup', $id); 
        DB::table('masuk_barang_sub')->where('kode_item_grup', $id)->delete();                           
        $data->delete();
    
        return redirect('/stock_in')->with('sukses','data berhasil dihapus');
    }
}
