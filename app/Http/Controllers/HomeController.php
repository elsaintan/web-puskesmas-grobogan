<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function visimisi()
    {
        return view('pages.visimisi',[
            'active' => 'profil',
            'visi' => Home::where('type', 'visi-misi')->first()
        ]);
    }

    public function motto()
    {
        return view('pages.motto',[
            "active" => 'profil',
            'data' => Home::where('type', 'motto')->first()
        ]);
    }

    public function tatanilai()
    {
        return view('pages.tatanilai',[
            "active" => 'profil',
            'data' => Home::where('type', 'tata-nilai')->first()
        ]);
    }

    public function maklumatpelayanan()
    {
        return view('pages.maklumatpelayanan',[
            "active" => 'profil',
            'data' => Home::where('type', 'maklumat pelayanan')->first()
        ]);
    }

    public function strukturorganisasi()
    {
        return view('pages.strukturorganisasi',[
            "active" => 'profil',
            'data' => Home::where('type', 'struktur organisasi')->first()
        ]);
    }

    public function about()
    {
        return view('pages.about',[
            "active" => 'profil',
            'data' => Home::where('type', 'about')->first()
        ]);
    }

    public function galeri()
    {
        return view('pages.galeri',[
            'active' => 'galeri',
            'galeri' => DB::table('galeri')->orderBy('id', 'DESC')->get()
        ]);
    }

}
