<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\category;
use App\Models\Projects;

class ProjectController extends Controller
{

  public function category($cat)
    {

      $getCat = category::where('name', 'like', '%'.$cat.'%')->get();

      foreach ($getCat as $nameCat) {
        $idCat = $nameCat->id;
        //dd($idCat);
      }

      $users = Projects::where('category', 'like', '%'.$idCat.'%')->orderBy('id', 'DESC')->paginate(12);

/*
        if(!$users)
        //  dd('Opps, Page Not Found 404 !');
        abort(404); //  menggunakan blade
*/

      return view ('projectnew', ['result' => $users]);
    }

  public function index()
  {

    $users = Projects::orderBy('id', 'ASC')->paginate(12);

    return view('projectsnew', ['show' => $users]);

  }
}
