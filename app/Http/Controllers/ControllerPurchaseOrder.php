<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Suplai;
use App\masuk_barang_sub;
use App\purchase_order;
use App\Purchase_order_line;
use App\Goods_receipt;

class ControllerPurchaseOrder extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $list = purchase_order::
        $list = purchase_order::withCount('lines')->orderBy('created_at','desc')->get();
        return view('purchasing/purchasing_index',['list_po'=>$list]);
    }
 

    public function get_produk($id_suplier)
    {
        $number_po = 'PO-'.rand();
        $suplier = Suplai::orderBy('code_suplier','asc')->get();
        $produk = masuk_barang_sub::where('kode_suplier',$id_suplier)->get();
        
        return view ('purchasing/purchasing_add',compact('number_po','suplier','produk','id_suplier'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $numberPO = 'PO-'.rand();
        $suplier = Suplai::all();
        return view ('purchasing/purchasing_add',['number_po'=>$numberPO,'suplier'=>$suplier]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
           

            $produk =  $request->produk;
            $qty =  $request->qty;
            $kode_po = $request->document_no;
            $suplier = $request->supplier;
          

            $id_po = Purchase_order::insertGetId([
    			'document_no'=>$kode_po,
                'supplier'=>$suplier,
                'status'=>1,
    			'created_at'=>date('Y-m-d H:i:s'),
    			'updated_at'=>date('Y-m-d H:i:s')
    		]);
            foreach ($qty as $e=>$qt) {
    			if($qt == 0){
    				continue;
    			}

                $dt_produk = masuk_barang_sub::where('id',$produk[$e])->first();
                $buy = $dt_produk->harga_perolehan;
                // dd($buy);
    			$grand_total = $qt * $buy;

    			Purchase_order_line::insert([
    				'purchase_order'=>$id_po,
    				'produk'=>$produk[$e],
    				'qty'=>$qt,
    				'buy'=>$buy,
                    'grand_total'=>$grand_total,
    			]);
    		}

    		\Session::flash('sukses','PO berhasil dibuat');
    	} catch (\Exception $e) {
    		\Session::flash('gagal',$e->getMessage());
    	}
        return redirect('/purchasing');
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
    public function update_qty(Request $request, $id)
    { try {
       $qty = $request->qty;
       $buy = $request->buy;
       $id_line = $request->id_line;
       $produk = $request->produk;


       foreach ($qty as $e => $qt) {
           $data['qty'] = $qt;
           $data_w['updated_at'] = date('Y-m-d H:i:s');
           $data['grand_total'] = $qt * $buy[$e];
           $data['buy'] = $buy[$e];
           $line = $id_line[$e];

           Purchase_order_line::where('id',$line)->update($data,$data_w);

           masuk_barang_sub::where('id',$produk[$e])->update([
               'harga_perolehan'=>$data['buy']
           ]);
       }
       \Session::flash('sukses','Data berhasil diubah');
    } catch (\Exception $e) {
        \Session::flash('gagal',$e->getMessage());
    }
    return redirect()->back();
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    
    }
    public function aproved($id){
     try {
         $po =  purchase_order::find($id);
         purchase_order::where('id',$id)->update([
             'status'=>2
         ]);
         Goods_receipt::where('purchase_order',$id)->delete();
         Goods_receipt::insert([
            'purchase_order'=>$id,
            'document_no'=>'GR'.$id.rand(),
            'status'=>1,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
         ]);
        \Session::flash('data berhasil di aprove');
     } catch (\Exception $e) {
        \Session::flash('gagal',$e->getMessage);
     }
     return redirect()->back();
    }
    public function detail($id){
        $dt = purchase_order::find($id);
        return view('purchasing/purchasing_detail',['detail'=>$dt]);
    }
    public function detail_delete($id){
        $delete = Purchase_order_line::find($id);
        $delete->delete();
        return redirect()->back()->with('sukses','data berhasil dihapus');
    }
}
