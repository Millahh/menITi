<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\biodata_mentee;
use App\Models\biodata_mentor;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('user.login');
    }  

    public function logincustom(Request $request)
    {
    
        $credentials = $request->only(['email','password']);

        if (Auth::attempt($credentials)) {
            // if success login
            if(auth()->user()->role == 0){
                return view('beranda.mentor');
            }
            else{
                return redirect()->route('beranda.mentee');
            }
        }
        return view('register');
    }

    public function register()
    {
        return view('user.register');
    }

    public function registercustom(Request $request)
    {
        $request->validate([
            'role' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);

        $user = new User([
            'role' => $request->role,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->save();
        //return $user->id;
        //dd($user->id);
        $param = $user->id;
        if($user->role == 0){
            return view('user.biodata-mentor', compact('param'));
        }
        else{
            return view('user.biodata-mentee', compact('param'));
        }
    }

    public function password()
    {
        $data['title'] = 'Change Password';
        return view('user/password', $data);
    }

    public function password_action(Request $request)
    {
        $request->validate([
            'old_password' => 'required|current_password',
            'new_password' => 'required|confirmed',
        ]);
        $user = User::find(Auth::id());
        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->regenerate();
        return back()->with('success', 'Password changed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
