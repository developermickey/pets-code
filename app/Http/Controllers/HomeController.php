<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class HomeController extends Controller
{
    
    
    public function index()
    {
        $data = array();
        $user = User::where('role_id','user')->get();
        $pet = \DB::table('pet_registration')->get();
        return view('auth.dashboard',compact('user','pet'));
    }

    public function admin_login()
    {
        $data = array();
        return view('auth.login');
    }
}
