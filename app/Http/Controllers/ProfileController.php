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
        //dd($id_user);
        $mentor = biodata_mentor::findOrFail($id);
        // dd($id);
        // return view('posts.show', compact('post'));
        return view('profile.detile-mentor', ['mentor'=>$mentor, 'id_user'=>$id_user]);
    }
    public function profile_mentee(string $id, $id_user)
    {
        //dd($id_user);
        $mentee = biodata_mentee::findOrFail($id);
        // dd($id);
        // return view('posts.show', compact('post'));
        return view('profile.detile-mentee', ['mentee'=>$mentee, 'id_user'=>$id_user]);
    }
}
