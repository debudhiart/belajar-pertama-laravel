<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    //tampilkan data
    public function index(){
        $data_barang = $users = DB::table('barang')->paginate(3);
        return view('crud', ['data_barang'=>$data_barang]);
    }

    //methode untuk tambah data
    public function tambah(){
        return view('crud-tambah-data');
    }

    //methode untuk simpan data
    public function simpan(Request $request){
        // dd($request->all());
        // DB::insert('insert into barang (kode_barang, nama_barang) values (?, ?)', [$request->kode_barang, $request->nama_barang]);

        DB::table('barang')->insert([
            ['kode_barang' => $request->kode_barang, 'nama_barang' => $request->nama_barang],
            ['kode_barang' => $request->kode_barang, 'nama_barang'.'xx' => $request->nama_barang.'xx'],
        ]);

        return redirect()->route('crud');
    }

    //methode untuk edit data

    //methode untuk hapus data
    public function delete ($id){
        DB::table('barang')->where('id',$id)->delete();
        return redirect()->back();
    }
}
