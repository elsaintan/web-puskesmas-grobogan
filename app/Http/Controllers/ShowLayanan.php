<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Pemeriksaan;
use Illuminate\Http\Request;

class ShowLayanan extends Controller
{
    function ugd(){
        $data = Layanan::where('type', 'UGD')->first();
        $pemeriksaan = Pemeriksaan::where('layanan_id', $data->id)->get();

        return view('pages.ugd',[
            'data' => $data,
            'pemeriksaan' => $pemeriksaan,
            'active' => "layanan"
        ]);

    }
}
