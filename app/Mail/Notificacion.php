<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\DB;
use App\MailClass;
use App\Email;

class Notificacion extends Mailable
{
    use Queueable, SerializesModels;

    public $cursos;

    public function __construct($cursos)
    {
        $this->cursos = $cursos;

    }

    public function build()
    {
        //Obtener configuracion del correo
        $confemail = Email::get()->first();
        //Obtener Remitente
        $confsender = DB::table('configurations')
        ->select('valorOne as name','valorTwo as email')
        ->where('campo','REMITENTE')->get()->first();

        //Retornar vista del mensaje con sus variables
        return $this->view('emails.notificacion')->with(compact('cursos','confemail'))            
        ->from($confsender->email,$confsender->name)
        ->subject($confemail->asunto);

        //Retornar vista del mensaje con sus variables [Con Remitente desde archivo .ENV]
        // return $this->view('emails.notificacion')->with(compact('cursos','confemail'))            
        // ->from(env('MAIL_USERNAME'),env('MAIL_FROM_NAME'))
        // ->subject($confemail->asunto);

    }
}
