<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\biodata_mentee;
use App\Models\biodata_mentor;

class BookmarkController extends Controller
{
    public function action(string $id)
    {
        //mendapatkan data user yg sedang login
        $user = biodata_mentee::orderBy('id')->get();
        //mendapatkan data mentor yang di-add ke bookmark
        $mentor = biodata_mentor::orderBy('id')->get();

        /////////////////////////////UPDATE TABEL BIODATA_MENTEE/////////////////////////////
        //mendapatkan kolom bookmark pada tabel biodata_mentee sesuai id user/mentee yg sdg login
        $id_user = auth()->user()->id;
        $id_user = $user->where('user_id', $id_user)->pluck('id');
        $bookmark = (array)biodata_mentee::findOrFail($id_user[0])->bookmark;
        
        //mendapatkan banyak data pada kolom bookmark
        $length = count($bookmark);
        $check = false;

        //cek apakah id sudah ada (sudah masuk bookmark)
        for($x=0; $x<$length; $x+=1)
        {
            if($id==$bookmark[$x]){
                $check=true;
                //hapus data dari kolom bookmark di tabel biodata_mentee
                $bookmark = array_diff($bookmark, array($id));
                $bookmark = array_values($bookmark);
                DB::table('biodata_mentee')->where('id', $id_user)->update(['bookmark'=>$bookmark]);
            }
        }
        if($check==false)
        {
            //tambah data ke kolom bookmark di tabel biodata_mentee
            array_push($bookmark, $id);
            DB::table('biodata_mentee')->where('id', $id_user)->update(['bookmark'=>$bookmark]);
        }

        /////////////////////////////UPDATE TABEL BIODATA_MENTOR/////////////////////////////
        $bookmark2 = (array)biodata_mentor::findOrFail($id)->bookmark;
        $length2 = count($bookmark2);
        $check2 = false;
        for($x=0; $x<$length2; $x+=1)
        {
            if($id_user[0]==$bookmark2[$x]){
                $check2=true;
                $bookmark2 = array_diff($bookmark2, array($id_user[0]));
                $bookmark2 = array_values($bookmark2);
                DB::table('biodata_mentor')->where('id', $id)->update(['bookmark'=>$bookmark2]);
            }
        }
        if($check2==false)
        {
            array_push($bookmark2, $id_user[0]);
            DB::table('biodata_mentor')->where('id', $id)->update(['bookmark'=>$bookmark2]);
        }
        return redirect()->route('beranda.mentee');
    }
    public function bookmark_list()
    {
        $cards = biodata_mentor::orderBy('id')->get();

        $user = biodata_mentee::orderBy('id')->get();
        
        //mengambil nilai id pada tabel user
        $id_user = auth()->user()->id;
        //mengambil nilai id pada tabel biodata_mentee yang memiliki value kolom user_id == id_user
        $id_user = $user->where('user_id', $id_user)->pluck('id');
        //mengambil nilai pd kolom bookmark di tabel biodata_mentee
        $bookmark_mentee = biodata_mentee::findOrFail($id_user[0])->bookmark;

        return view('favorite.bookmark', ['cards'=>$cards,'id_user'=>$id_user,'bookmark_mentee'=>$bookmark_mentee]);
    }
}
