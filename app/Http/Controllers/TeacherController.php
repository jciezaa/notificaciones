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
use App\Email;

class TeacherController extends Controller
{
    
    public function index(){

    }

	public function mail(){	

    	set_time_limit(0);

    	//Sólo lista los emails de docentes dentro de la base de datos
        $teachers = Teacher::select('email as email')->distinct()->get();
        //Cargar los correos de copia oculta
        $confbbc = Configuration::select('valorOne as email')->where('campo','BBC')->get()->first();

        foreach ($teachers as $teacher) {
        	//Recorremos docente por docente para enviar email con sus cursos-secciones-alumnos
			$cursos = DB::table('teachers')
	        ->where('email',$teacher->email)
	        ->distinct()
	        ->OrderBy('asignatura','seccion')->get();

    		//Listamos los correos de los alumnos de cada docente para enviarlos como CC
	        $correoAlumnos = Teacher::select('correoAlumno as email')->where('email',$teacher->email)->get()->first();

	        Mail::to($teacher->email)
	        ->cc([$correoAlumnos->email])
	        //->bcc(['julio.palomino@upc.pe','katherine.quispe@upc.pe','zuleyma.flores@upc.pe'])
	        ->bcc([$confbbc->email])
	        ->send(new NotificacionEmail($cursos));
	       
	}

	return redirect(url('/'))->with('notification','Notificaciones realizadas correctamente');

}

}
