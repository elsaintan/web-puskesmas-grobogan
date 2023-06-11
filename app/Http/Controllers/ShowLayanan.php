<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Pemeriksaan;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class ShowLayanan extends Controller
{
    function ugd($type){
        //$data = Layanan::where('type', 'UGD')->first();
        //$pemeriksaan = Pemeriksaan::where('layanan_id', $data->id)->get();

        $arrType = Layanan::all()->pluck('type')->toArray();

        $tipe = str_replace("-"," ", $type);

        if(in_array($tipe, $arrType)){
            $data = Layanan::where('type', $tipe)->first();
            $pemeriksaan = Pemeriksaan::where('layanan_id', $data->id)->get();

            return view('pages.ugd',[
                'data' => $data,
                'pemeriksaan' => $pemeriksaan,
                'active' => "layanan"
            ]);

        }else{
            return "Data Not Found";
        }



    }
}
