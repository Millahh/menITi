<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\biodata_mentee;
use App\Models\biodata_mentor;

class SendRequestController extends Controller
{
    public function send(string $id, $id_user)
    {
        $id_user = $id_user[1];

        //update kolom calon_mentee pada tabel biodata_mentor
        $existingArray1 = (array)biodata_mentor::find($id)->calon_mentee;
        array_push($existingArray1, $id_user);
        DB::table('biodata_mentor')->where('id', $id)->update(['calon_mentee'=>$existingArray1]);
        //update kolom pemberitahuan pada tabel biodata_mentor
        $pemberitahuan = (array)biodata_mentor::find($id)->pemberitahuan;
        $informasi = "Permohonan mentoring|Kamu mendapatkan pesan permohonan dari ".(biodata_mentee::find($id_user)->username)."|Date: ".date("d-m-Y")." Time: ".date("h:i a")."|false";
        array_push($pemberitahuan, $informasi);
        DB::table('biodata_mentor')->where('id', $id)->update(['pemberitahuan'=>$pemberitahuan]);

        //update kolom calon_mentor pada tabel biodata_mentee
        $existingArray2 = (array)biodata_mentee::find($id_user)->calon_mentor;
        array_push($existingArray2, $id);
        // $pemberitahuan = (array)biodata_mentee::find($id_user)->pemberitahuan;
        // unset($pemberitahuan[0]);
        DB::table('biodata_mentee')->where('id', $id_user)->update(['calon_mentor'=>$existingArray2]);
        // DB::table('biodata_mentee')->where('id', $id_user)->update(['pemberitahuan'=>$pemberitahuan]);

        return redirect()->route('beranda.mentee');
    }
    public function acc(string $id)
    {
        ////////////EDIT TABEL BIODATA_MENTOR (HAPUS CALON_MENTEE, TAMBAH MENTEE)////////////
        //mendapatkan nilai id mentor yg sdg login
        $id_user = auth()->user()->id;
        //mendapatkan data kolom calon_mentee pada tabel biodata_mentor
        $calon_mentee = (array)biodata_mentor::findOrFail($id_user)->calon_mentee;
        //menghapus id mentor dari calon_mentee pada var $calon_mentee
        $calon_mentee = array_diff($calon_mentee, array($id));
        //update calon_mentee pada tabel biodata_mentor
        DB::table('biodata_mentor')->where('id', $id_user)->update(['calon_mentee'=>$calon_mentee]);
        //mendapatkan data dari kolom mentee pada tabel biodata_mentor
        $existingArray1 = (array)biodata_mentor::find($id_user)->mentee;
        //menambah id mentor pada var $existingArray1
        array_push($existingArray1, $id);
        //update kolom mentee pada tabel biodata_mentor
        DB::table('biodata_mentor')->where('id', $id_user)->update(['mentee'=>$existingArray1]);

        ////////////EDIT TABEL BIODATA_MENTEE (HAPUS CALON_MENTOR, TAMBAH MENTOR)////////////
        //mendapatkan data kolom calon_mentor pada tabel biodata_mentee
        $calon_mentor = (array)biodata_mentee::findOrFail($id)->calon_mentor;
        //menghapus id mentor dari calon_mentor pada var $calon_mentor
        $calon_mentor = array_diff($calon_mentor, array($id_user));
        //update calon_mentor pada tabel biodata_mentee
        DB::table('biodata_mentee')->where('id', $id)->update(['calon_mentor'=>$calon_mentor]);

        //mendapatkan data dari kolom mentor pada tabel biodata_mentee
        $existingArray2 = (array)biodata_mentee::find($id)->mentor;
        //menambah id mentor pada var $existingArray2
        array_push($existingArray2, (string)$id_user);
        //update kolom mentor pada tabel biodata_mentee
        DB::table('biodata_mentee')->where('id', $id)->update(['mentor'=>$existingArray2]);
        //update kolom pemberitahuan pada tabel biodata_mentee
        $pemberitahuan = (array)biodata_mentee::find($id)->pemberitahuan;
        $informasi = "Permohonan mentoringmu diterima!|".(biodata_mentor::find($id_user)->username)." bersedia menjadi mentormu.|Date: ".date("d-m-Y")." Time: ".date("h:i a")."|false";
        array_push($pemberitahuan, $informasi);
        DB::table('biodata_mentee')->where('id', $id)->update(['pemberitahuan'=>$pemberitahuan]);
        return redirect()->route('beranda.mentor');
    }
    public function reject(string $id)
    {
        ////////////EDIT TABEL BIODATA_MENTOR (HAPUS CALON_MENTEE)////////////
        //mendapatkan nilai id mentor yg sdg login
        $id_user = auth()->user()->id;
        //mendapatkan data kolom calon_mentee pada tabel biodata_mentor
        $calon_mentee = (array)biodata_mentor::findOrFail($id_user)->calon_mentee;
        //menghapus id mentor dari calon_mentee pada var $calon_mentee
        $calon_mentee = array_diff($calon_mentee, array($id));
        //update calon_mentee pada tabel biodata_mentor
        DB::table('biodata_mentor')->where('id', $id_user)->update(['calon_mentee'=>$calon_mentee]);

        ////////////EDIT TABEL BIODATA_MENTEE (HAPUS CALON_MENTOR)////////////
        //mendapatkan data kolom calon_mentor pada tabel biodata_mentee
        $calon_mentor = (array)biodata_mentee::findOrFail($id)->calon_mentor;
        //menghapus id mentor dari calon_mentor pada var $calon_mentor
        $calon_mentor = array_diff($calon_mentor, array($id_user));
        //update calon_mentor pada tabel biodata_mentee
        DB::table('biodata_mentee')->where('id', $id)->update(['calon_mentor'=>$calon_mentor]);
        //update kolom pemberitahuan pada tabel biodata_mentee
        $pemberitahuan = (array)biodata_mentee::find($id)->pemberitahuan;
        $informasi = "Mohon maaf permohonan mentoringmu ditolak|".(biodata_mentor::find($id_user)->username)." tidak bersedia menjadi mentormu.|Date: ".date("d-m-Y")." Time: ".date("h:i a")."|false";
        array_push($pemberitahuan, $informasi);
        DB::table('biodata_mentee')->where('id', $id)->update(['pemberitahuan'=>$pemberitahuan]);

        return redirect()->route('beranda.mentor');

    }
}
