<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\biodata_mentee;
use App\Models\biodata_mentor;

class ProfileController extends Controller
{
    public function profile_mentor(string $id, $id_user)
    {
        $mentor = biodata_mentor::findOrFail($id);
        return view('profile.detile-mentor', ['mentor'=>$mentor, 'id_user'=>$id_user]);
    }
    public function profile_mentee(string $id, $id_user)
    {
        $mentee = biodata_mentee::findOrFail($id);
        return view('profile.detile-mentee', ['mentee'=>$mentee, 'id_user'=>$id_user]);
    }
    public function review_rating(string $id, $id_user)
    {
        $mentor = biodata_mentor::findOrFail($id);
        //dd(gettype($mentor->rating_review[0]));
        return view('penilaian.review-rating', ['mentor'=>$mentor, 'id_user'=>$id_user]);
    }
    public function send_review_rating(Request $request)
    {
        $request->validate([
            'rate' => 'required',
            'review' => 'required',
        ]);
        // dd(gettype($request->review));
        $get_id=$request->session()->get('_previous')['url'];
        $get_id = explode("/", $get_id);
        $id_mentor = (integer) $get_id[4];
        $id_user = (integer) $get_id[5];
        $pengirim_review = biodata_mentee::findOrFail($id_user)->username;
        $existingArray = (array)biodata_mentor::findOrFail($id_mentor)->rating_review;
        $newData = ($request->rate."/".$request->review."/".$pengirim_review);
        array_push($existingArray, $newData);
        DB::table('biodata_mentor')->where('id', $id_mentor)->update(['rating_review'=>$existingArray]);
        //ganti redirect halamannya
        return redirect()->route('beranda.mentee');
    }
}
