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

        //update kolom calon_mentor pada tabel biodata_mentee
        $existingArray2 = (array)biodata_mentee::find($id_user)->calon_mentor;
        array_push($existingArray2, $id);
        DB::table('biodata_mentee')->where('id', $id_user)->update(['calon_mentor'=>$existingArray2]);

        return redirect()->route('beranda.mentee');
    }
    public function acc(string $id)
    {
        $id_user = auth()->user()->id;
        $calon_mentee = biodata_mentor::findOrFail($id_user)->calon_mentee;
        //menghapus dan update id dari calon mentee
        unset($calon_mentee[$id]);
        DB::table('biodata_mentor')->where('id', $id_user)->update(['calon_mentee'=>$calon_mentee]);

        //update kolom mentee pada tabel biodata_mentor
        $existingArray1 = (array)biodata_mentor::find($id_user)->mentee;
        array_push($existingArray1, $id);
        DB::table('biodata_mentor')->where('id', $id)->update(['mentee'=>$existingArray1]);
        return redirect()->route('beranda.mentor');
    }
    public function reject(string $id)
    {
        $id_user = auth()->user()->id;
        $calon_mentee = biodata_mentor::findOrFail($id_user)->calon_mentee;
        //menghapus dan update id dari calon mentee
        unset($calon_mentee[$id]);
        DB::table('biodata_mentor')->where('id', $id_user)->update(['calon_mentee'=>$calon_mentee]);
        return redirect()->route('beranda.mentor');
    }
}
