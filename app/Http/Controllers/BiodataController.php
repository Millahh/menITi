<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\biodata_mentee;
use App\Models\biodata_mentor;

class BiodataController extends Controller
{
    public function biodata_mentee(Request $request){
        // dd($request->all());
        $request->validate([
            'foto' => 'required|image|mimes:jpg,png,jpeg|max:10240',
            'username' => 'required',
            'jenis_kelamin' => 'required',
            'tentang' => 'required',
            'tempat_tinggal' => 'required',
            'pekerjaan' => 'required',
            'instansi' => 'required',
            'telepon' => 'required|numeric',
            'minat' => 'required|min:1',
            'portofolio' => 'required|image|mimes:jpg,png,jpeg|max:10240',
        ]);
        // dd($request->all());        
        $porto_path = $request->file('portofolio')->store('portofolio', 'public');
        $foto_path = $request->file('foto')->store('foto', 'public');
        // dd($foto_path);
        $biodata_mentee = new biodata_mentee([
            'foto' => $foto_path,
            'username' => $request->username,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tentang' => $request->tentang,
            'tempat_tinggal' => $request->tempat_tinggal,
            'pekerjaan' => $request->pekerjaan,
            'instansi' => $request->instansi,
            'telepon' => $request->telepon,
            'minat' => $request->minat,
            'portofolio' => $porto_path,
        ]);
        $biodata_mentee->save();

        return view('user.login');
    }
}
