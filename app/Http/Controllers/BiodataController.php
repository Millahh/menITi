<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\User;
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
            // 'user_id' => 'required',
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
            'user_id' => $request->user_id,
            'calon_mentor' => $request->calon_mentor,
            'mentor' => $request->mentor
        ]);
        // dd($biodata_mentee);
        $biodata_mentee->save();

        return view('user.login');
    }

    public function biodata_mentor(Request $request){
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
            'bidang' => 'required',
            'jadwal' => 'required',
            'portofolio' => 'required|image|mimes:jpg,png,jpeg|max:10240',
            // 'user_id' => 'required',
        ]);
        // dd($request->all());        
        $porto_path = $request->file('portofolio')->store('portofolio', 'public');
        $foto_path = $request->file('foto')->store('foto', 'public');
        // dd($foto_path);
        $biodata_mentor = new biodata_mentor([
            'foto' => $foto_path,
            'username' => $request->username,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tentang' => $request->tentang,
            'tempat_tinggal' => $request->tempat_tinggal,
            'pekerjaan' => $request->pekerjaan,
            'instansi' => $request->instansi,
            'telepon' => $request->telepon,
            'bidang' => $request->bidang,
            'jadwal' => $request->jadwal,
            'portofolio' => $porto_path,
            'user_id' => $request->user_id,
            'calon_mentee' => $request->calon_mentee,
            'mentee' => $request->mentee
        ]);
        // dd($biodata_mentee);
        $biodata_mentor->save();

        return view('user.login');
    }

    public function beranda_mentee(){
        $cards = biodata_mentor::orderBy('id')->get();
        $cards2 = biodata_mentor::orderBy('id')->get();
        //dd($cards2);

        $user = biodata_mentee::orderBy('id')->get();
        //mengambil nilai id pada tabel user
        $id_user = auth()->user()->id;
        //mengambil nilai id pada tabel biodata_mentee yang memiliki value kolom user_id == id_user
        $id_user = $user->where('user_id', $id_user)->pluck('id');
        //mengambil nilai pada kolom mentor di tabel biodata_mentee sesuai dengan id mentee yang sedang login (id_user)
        $selected_mentor = (array)biodata_mentee::findOrFail($id_user[0])->mentor;
        //dd($selected_mentor);
        //dd($selected_mentor);
        // if(count($selected_mentor)>=1){
        //     unset($selected_mentor[0]);
        // }

        return view('beranda.mentee', ['cards'=>$cards, 'cards2'=>$cards2, 'id_user'=>$id_user, 'selected_mentor'=>$selected_mentor]);
    }

    public function beranda_mentor(){
        $cards=biodata_mentee::all();
        $id_user = auth()->user()->id;
        $calon_mentee = (array)biodata_mentor::findOrFail($id_user)->calon_mentee;
        $mentee_saya = (array)biodata_mentor::findOrFail($id_user)->mentee;
        // if(count($calon_mentee)>=1){
        //     unset($calon_mentee[0]);
        // }
        // if(count($mentee_saya)>=1){
        //     unset($mentee_saya[0]);
        // }
        // dd($mentee_saya);
        return view('beranda.mentor', ['cards'=>$cards, 'id_user'=>$id_user, 'calon_mentee'=>$calon_mentee, 'mentee_saya'=>$mentee_saya]);
    }
}
