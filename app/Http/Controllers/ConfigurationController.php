<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Configuration;
use App\Email;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ConfigurationController extends Controller
{
    

	public function indexConfig(){

		$confsender = Configuration::where('campo','REMITENTE')->first();
		$confbbc = Configuration::where('campo','BBC')->get();
		$confemail = Email::get()->first();

		return view('emails.configuraciones')->with(compact('confsender','confbbc','confemail'));

}

	public function confSender(){

		$confsender = Configuration::where('campo','REMITENTE')->first();		
		return view('emails.config.remitente')->with(compact('confsender'));
	}


	public function confBbc(){

		$confbbc = Configuration::where('campo','BBC')->get();

		return view('emails.config.copiaoculta')->with(compact('confbbc'));
	}


	public function confEmail(){

		$confemail = Email::get()->first();

		return view('emails.config.email')->with(compact('confemail'));
	}


//	UPDATE REMITENTE

		public function updateSender( Request $request){

			$this->validate($request, [
		            'name' => 'max:255|min:5',
		            'email'=> 'max:255|min:5|email',
		    ], [
		            'name.max' => 'Por favor ingrese sólo nombre completo.',
		            'name.min' => 'Por favor ingrese un nombre completo válido.',
		            'email.max' => 'Por favor ingrese un email completo válido.',
		            'email.min' => 'Por favor ingrese un email completo válido.',
		            'email' => 'Ingrese un email valido'

		    ]);


	        $sender = Configuration::find(1);
			$sender->valorOne = $request->input('name');
			$sender->valorTwo = $request->input('email');
			$sender->save();

        return redirect(url('/configuraciones/remitente'))->with('emails.config.remitente','Remitente modificado exitosamente');

 // END UPDATE REMITENTE

}






}
