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

	public function indexNotificar(){

		$teachers = Teacher::select('email as email')->distinct()->get()->count();
		$correoAlumnos = Teacher::select('correoAlumno as email')->distinct()->get()->count();

		$tiempo = round($teachers/7)*1000;

		return view('notificar')->with(compact('tiempo'));

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

		if($teachers < 7)
			$tiempo = 1;
		else
			$tiempo = round($teachers/7);

		return view('resumen')->with(compact('teachers','correoAlumnos','tiempo'));

		}

	public function planificacion(){

			return view('planificacion');
	
	}

//REGISTRO DE DESTINATARIOS EN COPIA OCULTA
	public function createBBC(Request $request){

		$this->validate($request, [

		            'emailBBC'=> 'required|max:255|min:8|email',
		    ], [
		            'emailBBC.max' => 'Por favor ingrese un email completo.',
		            'emailBBC.min' => 'Por favor ingrese un email completo.',
		            'emailBBC.email' => 'Ingrese un email valido',
		            'emailBBC.required' => 'Es necesario proporcionar un email'

		    ]);

	        $createBBC = new Configuration();
			$createBBC->campo = 'BBC';
			$createBBC->valorOne = strtoupper($request->input('emailBBC'));
			$createBBC->save();

        return back()->with('notification','Email agregado para copia oculta');

// TERMINO DE REGISTRO DE DESTINATARIOS EN COPIA OCULTA

	}

	public function deleteBBC($id){

		Configuration::find($id)->delete();
		return back();

	}


}
