<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengaduanSaran;

class PengaduanSaranController extends Controller
{
    public function index()
    {
        return view('admin.messages.index',[
            'messages' => PengaduanSaran::all()
        ]);
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nama_pegawai' => 'required|max:255',
            'nama_ruangan' => 'required|max:255',
            'pesan' => 'required'
        ]);

        PengaduanSaran::create($validatedData);

        return redirect('layanan-pengaduan-saran')->with('success','Pesan anda telah terkirim!');
        //return "OK";
    }
}
