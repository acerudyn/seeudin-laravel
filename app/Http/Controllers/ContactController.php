<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;

class ContactController extends Controller
{

  public function store(Request $request) // Untuk memasukan data kedalam database
  {

    $this->validate($request, [         // Validasi
      'name'  => 'required|min:5',
      'email' => 'required|email|min:10',
      'phone'  => 'required|min:11|numeric',
      'message' => 'required|min:5'
    ]);

    $kontak = new Contact;
    $kontak->name = $request->name;
    $kontak->email = $request->email;
    $kontak->phone = $request->phone;
    $kontak->message = $request->message;
    $kontak->save();
    $notif = $kontak->save();
    //dd($kontak);

    if (!$notif) {
      flash()->error('Error', 'Failed Submit Data !');
      return redirect('/');
    } elseif ($notif) {
      flash()->success('Succsess', 'Wow Good Job, Succsess Submit Data !');
      return redirect('/');
    }

  }

}
