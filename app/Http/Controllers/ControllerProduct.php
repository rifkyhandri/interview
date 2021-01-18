<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
class ControllerProduct extends Controller
{
    function post(Request $request){
        $product = new Product;
        $product->kode_penjual = $request->kode_penjual;
        $product->kode_product = $request->kode_product;
        $product->kategori = $request->kategori;
        $product->nama_product = $request->nama_product;
        $product->nama_penjual = $request->nama_penjual;
        $product->price = $request->price;
        $product->desc = $request->desc;
        $product->active = $request->active;

        $product->save();
        return response()->json(
            [
                "message" => "Success",
                "data" => $product
            ]
        );
    }
    function get(){
        $data = Product::all();
        return response()->json(
            [
                "message" => "Success",
                "data"=> $data
            ]
        );
    }
    function getbyID($id){
        $data = Product::where('id',$id)->get();
       
        
            return response()->json(
                [
                    "message" => "Success",
                    "data"=> $data
                ]
            );
        
       
    }
    function put($id ,Request $request){
        $product = Product::where('id',$id)->first();
        if($product){
            $product->kode_penjual = $request->kode_penjual ? $request->kode_penjual :$product->kode_penjual;
            $product->kode_product = $request->kode_product ? $request->kode_product :$product->kode_product;
            $product->kategori = $request->kategori ? $request->kategori :$product->kategori;
            $product->nama_product = $request->nama_product ? $request->nama_product :$product->nama_product;
            $product->nama_penjual = $request->nama_penjual ? $request->nama_penjual :$product->nama_penjual;
            $product->price = $request->price ? $request->price :$product->price;
            $product->desc = $request->desc ? $request->desc :$product->desc;
            $product->active = $request->active ? $request->active :$product->active;

            $product->save();

            return response()->json([
                "message" => "PUT method Success",
                "data" =>$product

            ]);
        }
        return response()->json([
            "message" => "Gagal"
        ],400);    
    }
    function delete($id){
        return response()->json(
            [
                "message" => "Delete Method Success".$id
            ]
        );
        return response()->json(
            [
                "message" => "Data not Found",
            ],400
        );
    }
 

}
