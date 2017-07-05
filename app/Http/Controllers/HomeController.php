<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\profil;

class HomeController extends Controller
{
    public function index()
    {
      $home = profil::all();
       //dd($home);

      return view ('index',['show' => $home]);
    }
}
