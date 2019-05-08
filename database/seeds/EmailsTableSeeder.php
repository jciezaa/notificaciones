<?php

use Illuminate\Database\Seeder;
use App\Email;

class EmailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Email::create([
            'asunto' => 'Lista de alumnos con cruce - Exámenes finales 2019-00 EPE',
            'saludoinicial' => 'Estimado profesor(a):',
            'primerparrafo' => 'Para consultar y notificarle sobre los alumnos de su asignatura que tienen CRUCES DE EXÁMENES. Puede considerar alguna de las siguientes opciones para poder brindarle facilidades:',
            'segundoparrafo' => 'Para consultar el rol de evaluaciones de cada alumno puede seguir la ruta:',
            'facilidad1' => 'Exonerarlos de la sustentación.',
            'facilidad2' => 'Los alumnos pueden sustenten en la semana 9.',
            'facilidad3' => 'Los alumnos puedan sustentar en horas determinadas (dentro de su programación de exámenes parciales, como primer o último grupo).',
            'saludofinal' => 'Saludos cordiales,',
            'firma' => 'REGISTROS ACADÉMICOS',
        ]);




    }
}
