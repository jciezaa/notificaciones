<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Email;

class EmailController extends Controller
{

  public function confEmail()
  {

    $confemail = Email::get()->first();

    return view('emails.config.email')->with(compact('confemail'));
  }


  //	UPDATE EMAIL

  public function updateEmail(Request $request)
  {
    $email = Email::find(1);
    $email->asunto = $request->input('asunto');
    $email->saludoinicial = $request->input('saludoinicial');
    $email->primerparrafo = $request->input('primerParrafo');
    $email->facilidad1 = $request->input('facilidad1');
    $email->facilidad2 = $request->input('facilidad2');
    $email->facilidad3 = $request->input('facilidad3');
    $email->segundoparrafo = $request->input('segundoParrafo');
    $email->saludofinal = $request->input('saludoFinal');
    $email->firma = $request->input('firma');
    $email->save();

    return back()->with('notificaciones/notification', 'Plantilla de Email actualizada correctamente');

  }
}
