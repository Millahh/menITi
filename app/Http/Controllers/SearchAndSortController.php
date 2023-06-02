<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\biodata_mentee;
use App\Models\biodata_mentor;

class SearchAndSortController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->input('search');
        $cards = biodata_mentor::query()
            ->where('username', 'LIKE', "%{$search}%")
            ->orWhere('tentang', 'LIKE', "%{$search}%")
            ->orWhere('tempat_tinggal', 'LIKE', "%{$search}%")
            ->orWhere('bidang', 'LIKE', "%{$search}%")
            ->get();
        // dd($cards);
        $cards2 = biodata_mentor::all();
        $user = biodata_mentee::all();
        //mengambil nilai id pada tabel user
        $id_user = auth()->user()->id;
        //mengambil nilai id pada tabel biodata_mentee yang memiliki value kolom user_id == id_user
        $id_user = $user->where('user_id', $id_user)->pluck('id');
        //mengambil nilai pada kolom mentor di tabel biodata_mentee sesuai dengan id mentee yang sedang login (id_user)
        $selected_mentor = biodata_mentee::findOrFail($id_user[0])->mentor;
        if(count($selected_mentor)>=1){
            unset($selected_mentor[0]);
        }
        //dd($selected_mentor);
        return view('beranda.mentee', ['cards'=>$cards, 'cards2'=>$cards2, 'id_user'=>$id_user, 'selected_mentor'=>$selected_mentor]);
    }

}
