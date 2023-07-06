<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Pemeriksaan;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Layanan::all();

        return view('admin.layanan.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // switch ($type) {
        //     case 'ranap':
        //         return view('admin.ranap');
        //         break;
        //     case 'rawat-jalan':
        //         return view('admin.rawatjalan');
        //         break;
        //     default:
        //         # code...
        //         break;
        // }
        $data = Layanan::find($id);
        $pemeriksaan = Pemeriksaan::where('layanan_id', $data->id)->get();
        return view('admin.layanan.view', [
            'data' => $data,
            'pemeriksaan' => $pemeriksaan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Layanan::find($id);
        $pemeriksaan = Pemeriksaan::where('layanan_id', $data->id)->get();

        return view('admin.layanan.ranap', [
            'data' => $data,
            'pemeriksaan' => $pemeriksaan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //return $request->id_pemeriksaan[2];
        $size =  count($request['hari']);
        for ($i=0; $i < $size; $i++) {
            Pemeriksaan::where('id', $request->id_pemeriksaan[$i])->update([
                'hari' => $request->hari[$i],
                'jam' => $request->jam[$i]
            ]);
        }

        $validatedData = $request->except('hari', 'jam', 'id_pemeriksaan');


        if($request->file('standar_pelayanan')){
            if($request->oldImage != $request->standar_pelayanan){
                Storage::disk('local')->delete("standar_pelayanan/" . $request->oldImage);
            }
            $dokumen_name = $request->file('standar_pelayanan')->getClientOriginalName();
            $request->file('standar_pelayanan')->storeAs('standar_pelayanan', $dokumen_name);
            $validatedData['standar_pelayanan'] = $dokumen_name;
        }

        Layanan::find($request->id)->update($validatedData);
        return redirect('/dashboard/layanan')->with('success', 'Data been added!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Layanan $layanan)
    {
        //
    }
}
