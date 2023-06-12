<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\PengaduanSaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use function PHPSTORM_META\type;

class ProfilController extends Controller
{
    public function show($type)
    {
        switch ($type){
        case "visi-misi":
            return view('admin.visi',[
                'data' => Home::where('type', $type)->first()
            ]);
            break;
        case "tata-nilai":
            return view('admin.tatanilai',[
                'data' => Home::where('type', $type)->first()
            ]);
            break;
        case "motto":
            return view('admin.motto',[
                'data' => Home::where('type', $type)->first()
            ]);
            break;
        case "struktur organisasi":
            return view('admin.strukturorganisasi',[
                'data' => Home::where('type', $type)->first()
            ]);
            break;
        case "maklumat pelayanan":
            return view('admin.maklumatpelayanan',[
                'data' => Home::where('type', $type)->first()
            ]);
            break;
        case "about":
            return view('admin.about',[
                'data' => Home::where('type', $type)->first()
            ]);
            break;
        }


    }

    public function aduan()
    {
        return view('admin.pengaduan',[
            'messages' => PengaduanSaran::all()
        ]);
    }

    public function updateImage(Request $request)
    {
        $rules = [
            'body' => 'image',
        ];

        $validatedData = $request->validate($rules);

        //return $validatedData;

        if($request->file('body')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['body'] = $request->file('body')->store('profil-images');
        }

        Home::where('type', $request->type)
                ->update($validatedData);
        return redirect('/dashboard/profil/'.$request->type)->with('success', 'Data has been updated!');
    }

    public function update(Request $request)
    {
        $rules = [
            'body' => 'required',
        ];
        $validatedData = $request->validate($rules);
        Home::where('id', $request->id)
                ->update($validatedData);
        return redirect('/dashboard/profil/'.$request->type)->with('success', 'Data has been updated!');
    }

    public function addImage(Request $request){
        $rules = [
            'image' => 'image',
        ];

        $validatedData = $request->validate($rules);

        if($request->file('image')){
            $dokumen_name = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('galeri', $dokumen_name);
            $validatedData['image'] = $dokumen_name;
        }

        //Dokumen::create($validatedData);
        DB::table('galeri')->insert($validatedData);

        return redirect('/dashboard/galeri/')->with('success', 'Data has been added!');

    }
}
