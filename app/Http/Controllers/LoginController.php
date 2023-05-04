<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /**
     * Display login page.
     * 
     * @return Renderable
     */
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Handle account login request
     * 
     * @param LoginRequest $request
     * 
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('auth.login');
    }  

    public function logincustom(LoginRequest $request)
    {
        $input = $request->all();
      
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
      
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->role == 'mentee') {
                return redirect()->route('beranda.mentee');
            }else if (auth()->user()->role == 'mentor') {
                return redirect()->route('beranda.mentor');
            }else{
                return redirect()->route('register');
            }
        }else{
            return redirect()->route('register')
                ->with('error','Email-Address And Password Are Wrong.');
        }
    }
}
