<?php

namespace App\Http\Controllers;

use App\Models\Pemilik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GetByIdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showbyId(Request $request){
        $id = $request->id;
        // $alamat = $request->alamat;
        // $jumlahkamar = $request->jumlahkamar;
        // $harga = $request->harga;

        return Pemilik::find($id);
        // $kost->alamat = $alamat;
        // $kost->jumlahkamar = $jumlahkamar;
        // $kost->harga = $harga;

    }
}
