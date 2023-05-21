<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\biodata_mentee;
use App\Models\biodata_mentor;

class ProfileController extends Controller
{
    public function profile_mentor(string $id)
    {
        // dd($id);
        $mentor = biodata_mentor::findOrFail($id);
        //dd($mentor);
        // return view('posts.show', compact('post'));
        return view('profile.detile-mentor', ['mentor'=>$mentor]);
    }
}
