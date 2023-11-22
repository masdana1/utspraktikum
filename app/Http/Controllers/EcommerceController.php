<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ecommerce;

class EcommerceController extends Controller
{
    public function index(){

        $data = Ecommerce::all();
        return view('\CRUD\databunga', compact('data'));
    }
    public function bunga(){
        return view('\CRUD\tambahdata');
    }

    public function insertdata(Request $request){
        //dd($request-> all());
        Ecommerce::create($request-> all());
        return redirect()->route('databunga')->with('Data Berhasil ditambahkan');
    }

    public function tampildata($id){

        $data = Ecommerce:: find($id);
       // dd($data);
       return view('\CRUD\editdata', compact('data'));

    }

    public function updatedata(Request $request, $id){
        $data = Ecommerce:: find($id);
        $data->update($request-> all());
        return redirect()->route('databunga')->with('Data Berhasil diupdate');


        }

    public function delete($id){
        $data = Ecommerce:: find($id);
        $data->delete();
        return redirect()->route('databunga')->with('Data Berhasil dihapus');

    }

}