<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Mail\Message;
use App\Mail\Notificacion as NotificacionEmail;
use Illuminate\Support\Facades\Mail;
use App\Teacher;
use App\Configuration;

class TeacherController extends Controller
{
    
    public function index(){

    }

	public function mail(){	

    	set_time_limit(0);
    	//Sólo lista los emails de docentes dentro de la base de datos
        $teachers = DB::table('teachers')->GroupBy('email')->pluck('email as email');

        //Cargar los correos de copia oculta
        $confbbc = Configuration::select('valorOne')->where('campo','BBC')->get();

        $confemail = Email::get()->first();

        //dd($confbbc);
        //dd($teachers);

        foreach ($teachers as $teacher) {

			$cursos = DB::table('teachers')
	        ->where('email',$teacher)
	        ->distinct()
	        ->OrderBy('asignatura','seccion')->get();
    
	        	 
	        $correoAlumnos = DB::table('teachers')
	        ->select('correoAlumno as email')
	        ->where('email',$teacher)
	        ->distinct()
	        ->OrderBy('asignatura','seccion')->get();
	        //dd($correoAlumnos);



	        // Mail::to($teacher->email)
	        // ->cc($correoAlumnos)
	        // ->bcc(['julio.palomino@upc.pe','katherine.quispe@upc.pe','zuleyma.flores@upc.pe'])
	        // ->bcc($confbbc)
	        // ->send(new NotificacionEmail($cursos,$confemail));
	       
	}

	return redirect(url('/'))->with('notification','Notificaciones realizadas correctamente');

}

}
