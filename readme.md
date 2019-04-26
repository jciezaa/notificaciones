## Sobre Predator

<p> El siguiente proyecto se basa en brindar soporte al área de registros académicos para el equipo de programación. </p>

<strong> Características: </strong>

- Envío masivo de Emails con un aplantilla predefinida para la notificaciones de cruces.
- Generación y comprobación de horarios para evaluaciones escritas.

## Instalación de entorno

- Instalación de Laragon: <code> https://laragon.org/download/ </code>
- Instalación de Composer: <code> https://getcomposer.org/download/ </code>

## Clonar repositorio

- Iniciar <strong> CMD (Consola de comandos). </strong>
- Situarse en la ruta: <strong> cd "C:\laragon\www" </strong>
- Clonar repositorio con el comando: <code> git clone https://github.com/jciezaa/notificaciones.git </code>

## Actualización de repositorio

- Iniciar <strong> CMD (Consola de comandos). </strong>
- Situarse en la ruta <strong> "C:\laragon\www\notificaciones" </strong>
- Ejecutar <code> Composer update </code>
- Ejecutar <code> Composer dump-autoload </code>
- Ejecutar <code> php artisan key:generate </code>

## Migración de Base de datos

- Iniciar <strong> CMD (Consola de comandos). </strong>
- Situarse en la ruta <strong> "C:\laragon\www\notificaciones" </strong>
- Ejecutar <code> php artisan migrate:refresh --seed </code>

## Configuración de archivo .ENV

- Asegurar la siguiente configuración importante:

<code>
MAIL_DRIVER=smtp </br>
MAIL_HOST=smtp.office365.com </br>
MAIL_PORT=587 </br>
MAIL_FROM_NAME='JUANITO PEREZ' </br>
MAIL_USERNAME='JUANITO.PEREZ@JUANITO.PE' </br>
MAIL_PASSWORD='********' </br>
MAIL_ENCRYPTION=tls </br>
</code>


Predator es un sistema desarrollado con el framework Laravel y base de datos MySql.
  

## Creadores

Jesús Cieza Arteaga

