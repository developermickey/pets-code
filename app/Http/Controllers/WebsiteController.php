<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Helpers\MyHelper;

class WebsiteController extends Controller
{
    
   public function index()
   {
    return view('index');

   }


   


     
}

