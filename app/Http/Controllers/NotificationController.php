<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\biodata_mentee;
use App\Models\biodata_mentor;
use App\Models\notifikasi;

class NotificationController extends Controller
{
    public function notif()
    {
        $id_user = auth()->user()->id;
        $pemberitahuan;
        $role = User::find($id_user)->role;
        if($role == 1){
            $user = biodata_mentee::orderBy('id')->get();
            $id_user = $user->where('user_id', $id_user)->pluck('id');
            $pemberitahuan = biodata_mentee::find($id_user[0])->pemberitahuan;
        }else{
            $user = biodata_mentor::orderBy('id')->get();
            $id_user = $user->where('user_id', $id_user)->pluck('id');
            $pemberitahuan = biodata_mentor::find($id_user[0])->pemberitahuan;
            // dd($pemberitahuan);
        }
        return view('notification.notif', ['pemberitahuan'=>$pemberitahuan, 'id_user'=>$id_user, 'role'=>$role]);
    }
}
