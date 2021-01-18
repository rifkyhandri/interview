<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\masuk_barang_sub;
class ControllerStockbyItem extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stock_sum = DB::table('masuk_barang_sub')->get()->sum('qty');
        $stock_sub = DB::table('masuk_barang_sub')->get();
        return view('stock/by_item',['stock_sub'=>$stock_sub,'stock_sum'=>$stock_sum]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $update_sub = \App\masuk_barang_sub::find($id);
        $update_sub->update($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('assets/images/products/',$request->file('avatar')->getClientOriginalName());
            $update_sub->avatar = $request->file('avatar')->getClientOriginalName();
            $update_sub->save();
        }
    return redirect('stock_in');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       masuk_barang_sub::destroy($id);
       return redirect('/stock_in');
    }

}
