<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikle;

class ArtikleController extends Controller
{
    //
    //index (Menampilkan semua)
    public function index(){
        return Artikle::all();
    }

    //index (Menampilkan sesuai id)
    public function index1($id){
        return Artikle::find($id);
    }

    //index (Menyimpan data)
    public function create(request $request){
        $artikle = new Artikle;
        $artikle->judul = $request->judul;
        $artikle->deskripsi = $request->deskripsi;
        $artikle->save();

        return "Data berhasil masuk";
    }

    //index (Update semua)
    public function update(request $request, $id){
        $judul = $request->judul;
        $deskripsi = $request->deskripsi;

        $artikle = Artikle::find($id);
        $artikle->judul = $judul;
        $artikle->deskripsi = $deskripsi;
        $artikle->save();

        return "Data berhasil diupdate";
    }

    //delete
    public function delete($id){
        $artikle = Artikle::find($id);
        $artikle->delete();

        return "Data berhasil dihapus";
    }
}
