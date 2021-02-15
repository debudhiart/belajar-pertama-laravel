<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    //tampilkan data
    public function index(){
        return view('crud');
    }

    //methode untuk tambah data
    public function tambah(){
        return view('crud-tambah-data');
    }

    //methode untuk simpan data

    //methode untuk edit data

    //methode untuk hapus data
    
}
