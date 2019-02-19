<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Configuration;
use App\Email;
use App\Teacher;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ConfigurationController extends Controller
{
    
	public function indexConfig(){

		$confsender = Configuration::where('campo','REMITENTE')->first();
		$confbbc = Configuration::where('campo','BBC')->get();
		$confemail = Email::get()->first();

		return view('emails.configuraciones')->with(compact('confsender','confbbc','confemail'));

	}

	public function confDataBase(){

				
		return view('emails.config.data');
	}

	public function confBbc(){

		$confbbc = Configuration::where('campo','BBC')->get();

		return view('emails.config.copiaoculta')->with(compact('confbbc'));
	}




	public function resumen(){

		$teachers = Teacher::select('email as email')->distinct()->get()->count();
		$correoAlumnos = Teacher::select('correoAlumno as email')->distinct()->get()->count();
		$tiempo = $teachers/5;

		return view('resumen')->with(compact('teachers','correoAlumnos','tiempo'));

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

        return redirect(url('/configuraciones'))->with('notification','Remitente modificado exitosamente');

 // END UPDATE REMITENTE

}


//REGISTRO DE DESTINATARIOS EN COPIA OCULTA
	public function createBBC(Request $request){

		$this->validate($request, [

		            'emailBBC'=> 'max:255|min:8|email',
		    ], [
		            'emailBBC.max' => 'Por favor ingrese un email completo.',
		            'emailBBC.min' => 'Por favor ingrese un email completo.',
		            'emailBBC' => 'Ingrese un email valido'

		    ]);

	        $createBBC = new Configuration();
			$createBBC->campo = 'BBC';
			$createBBC->valorOne = $request->input('emailBBC');
			$createBBC->save();

        return back()->with('notification','Email agregado para copia oculta');

// TERMINO DE REGISTRO DE DESTINATARIOS EN COPIA OCULTA


	}

	public function deleteBBC($id){

		Configuration::find($id)->delete();
		return back();

	}


}
