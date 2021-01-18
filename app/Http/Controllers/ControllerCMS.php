<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\brand_cat;
class ControllerCMS extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cms/menu_editor');
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
        //
    }

    public function brandcat(){
        $brand_cat = brand_cat::all();
        $data_brand = \App\Brand::all();
        return view('cms/brand_kategori',['brand'=>$data_brand,'brand_cat'=>$brand_cat]);
    }
    public function createbrandcat(Request $request){
        $create = brand_cat::create($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('assets/images/ecommerce/brand-cat/',$request->file('avatar')->getClientOriginalName());
            $create->avatar = $request->file('avatar')->getClientOriginalName();
            $create->save();
        }
        return redirect('menu_cms/brand-cat');
    }

    
}
