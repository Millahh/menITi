<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\biodata_mentee;
use App\Models\biodata_mentor;

class PengingatController extends Controller
{
    public function pengingat(Request $request){
        // dd($request);
        return view('kalender.pengingat');
    }
}
