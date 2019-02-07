<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\DB;
use App\MailClass;


class Notificacion extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $cursos;

    public function __construct($cursos,$confemail)
    {
        $this->cursos = $cursos;
        $this->confemail = $confemail;


    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // dd($this->correoAlumnos);
            return $this->view('emails.notificacion',[$this->cursos,$this->confemail])            
            ->from('aliver.meza@upc.pe','Aliver Meza Rodriguez')
            ->subject('Lista de alumnos con cruce - Exámenes finales 2019-00 EPE');
            //->subject('Prueba 4 - copia oculta');
    }
}
