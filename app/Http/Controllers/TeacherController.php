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
use Maatwebsite\Excel\Facades\Excel;


class TeacherController extends Controller
{
    
    public function index(){
    	$teachers = Teacher::all();

        if($teachers->count() >= 5){
            $teachers = $teachers->random(5);          
    	       return view('emails.config.data')->with(compact('teachers'));
        }

        return view('emails.config.data')->with(compact('teachers'));
    
    }

    public function importarDatabase(Request $request){

        $this->validate($request, [
                    'excel' => 'required|mimes:xls,xlsx',
                   
            ], [
                    'excel.required' => 'Por favor adjunta un archivo de Excel.',
                    'excel.mimes' => 'Sólo puedes adjuntar archivos de Excel.',
            ]);
 	    	

    	if($request->hasFile('excel')){            

            \Excel::load($request->file('excel')->getRealPath(), function ($reader)
            {

                Teacher::truncate();

                foreach ($reader->toArray() as $row)
                {
                	$teacher = new Teacher;

                    $teacher->docente       = $row['docente'];
                    $teacher->email 		= $row['email'];
                    $teacher->asignatura    = $row['asignatura'];
                    $teacher->descripcion 	= $row['descripcion'];
                    $teacher->seccion       = $row['seccion'];
                    $teacher->medio 		= $row['medio'];
                    $teacher->alumno       	= $row['alumno'];
                    $teacher->correoalumno 	= $row['correoalumno'];
                    $teacher->apellidos		= $row['apellidos'];
                    $teacher->save();
 

                }
            });

            return redirect('configuraciones/data')->with('notification','La base de datos se adjuntó correctamente');
        }

        return redirect('configuraciones/data')->with('alerta','Por favor selecciona un archivo válido');
    }


	public function mail(){	

    	set_time_limit(0);
    	//Sólo lista los emails de docentes dentro de la base de datos
        $teachers = Teacher::select('email as email')->distinct()->get();

        //Cargar los correos de copia oculta
        $confbbc = Configuration::select('valorOne as email')->where('campo','BBC')->get()->toArray();
        //dd($confbbc);

        foreach ($teachers as $teacher) {
        	//Recorremos docente por docente para enviar email con sus cursos-secciones-alumnos
			$cursos = DB::table('teachers')
	        ->where('email',$teacher->email)
	        ->distinct()
	        ->OrderBy('asignatura','seccion')->get();

    		//Listamos los correos de los alumnos de cada docente para enviarlos como CC
	        $correoAlumnos = Teacher::select('correoAlumno as email')->where('email',$teacher->email)->get()->toArray();

	        Mail::to($teacher->email)
	        ->cc($correoAlumnos)
	        ->bcc($confbbc)
	        ->send(new NotificacionEmail($cursos));
	       
	}

	return redirect(url('/'))->with('notification','Notificaciones realizadas correctamente');

}

}
