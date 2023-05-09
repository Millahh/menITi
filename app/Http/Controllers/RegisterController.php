<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequests;

class RegisterController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        return view('user.register');
    }
    public function menteeBiodataReg()
    {
        return view('user.biodata-mentee', ['user_id'=>$user_id]);
    }
    public function mentorBiodataReg()
    {
        return view('user.biodata-mentor', ['user_id'=>$user_id]);
    }
}
