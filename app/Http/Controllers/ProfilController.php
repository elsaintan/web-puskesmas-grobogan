<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\PengaduanSaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use function PHPSTORM_META\type;

class ProfilController extends Controller
{
    public function show($type)
    {
        switch ($type){
        case "visi":
            return view('admin.visi',[
                'data' => Home::where('type', $type)->first()
            ]);
            break;
        case "misi":
            return view('admin.misi',[
                'data' => Home::where('type', $type)->first()
            ]);
            break;
        case "tata nilai":
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

    public function updateImage(Request $request, Home $home)
    {
        $rules = [
            'body' => 'image',
        ];

        $validatedData = $request->validate($rules);

        if($request->file('body')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['body'] = $request->file('body')->store('profil-images');
        }

        Home::where('id', $home->id)
                ->update($validatedData);
        return redirect('/dashboard/all-post')->with('success', 'Data has been updated!');
    }

    public function update(Request $request, Home $home)
    {
        $rules = [
            'body' => 'required',
        ];
        $validatedData = $request->validate($rules);
        Home::where('id', $home->id)
                ->update($validatedData);
        return redirect('/dashboard/all-post')->with('success', 'Data has been updated!');
    }
}
