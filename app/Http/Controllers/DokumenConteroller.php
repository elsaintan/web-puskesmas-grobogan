<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DokumenConteroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dokumen.index',[
            'docs' => Dokumen::all()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dokumen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'dokumen' => 'file',
            'category' => 'required'
        ];

        $validatedData = $request->validate($rules);

        if($request->file('dokumen')){
            $dokumen_name = $request->file('dokumen')->getClientOriginalName();
            $request->file('dokumen')->storeAs('dokumen', $dokumen_name);
            $validatedData['dokumen'] = $dokumen_name;
        }

        Dokumen::create($validatedData);

        return redirect('/dashboard/dokumen/')->with('success', 'Data has been updated!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dokumen = Dokumen::where('category',$id)->get();
        if ($id == "sk") {
            return view('pages.dokumen',[
                'active' => "dokumen",
                'data' => $dokumen,
                'title' => "Surat Keputusan"
            ]);
        }else{
            return view('pages.dokumen',[
                'active' => "dokumen",
                'data' => $dokumen,
                'title' => "SOP"
            ]);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Dokumen::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'dokumen' => 'file',
            'category' => 'required'
        ];

        $validatedData = $request->validate($rules);

        //return $validatedData;

        if($request->file('dokumen')){
            if($request->oldDoc){
                Storage::delete($request->oldDoc);
            }
            $dokumen_name = $request->file('dokumen')->getClientOriginalName();
            $filenameSimpan = $dokumen_name;
            $request->file('dokumen')->move(public_path('dokumen'), $filenameSimpan);
            $validatedData['dokumen'] = $filenameSimpan;
        }

        Dokumen::where('id', $request->id)
                ->update($validatedData);
        return redirect('/dashboard/dokumen/')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Dokumen::find($id);
        Storage::delete($data->dokumen);
        Dokumen::destroy($id);
        return redirect('/dashboard/dokumen/')->with('success', 'Data has been deleted!');
    }
}
