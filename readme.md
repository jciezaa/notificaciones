## Sobre Predator

<p> El siguiente proyecto se basa en brindar soporte al área de registros académicos para el equipo de programación. </p>

<strong> Características: </strong>

- Envío masivo de Emails con un aplantilla predefinida para la notificaciones de cruces.
- Generación y comprobación de horarios para evaluaciones escritas.

## Instalación de entorno

- Instalación de Laragon: <code> https://laragon.org/download/ </code>
- Instalación de Composer: <code> https://getcomposer.org/download/ </code>
- Instalación de GIT: <code> https://git-scm.com/ </code>
- Reiniciar equipo.

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

## Crear base de datos "notificaciones"

- Acceder a Laragon
- Iniciar Laragon
- Acceder a la pestaña base de datos y abrir.
- Crear base de datos con nombre: <strong> notificaciones </strong>

## Migración de Base de datos

- Iniciar <strong> CMD (Consola de comandos). </strong>
- Situarse en la ruta <strong> "C:\laragon\www\notificaciones" </strong>
- Ejecutar <code> php artisan migrate:refresh --seed </code>

## Configuración de archivo .ENV

- Asegurar la siguiente configuración importante:

<code>MAIL_DRIVER=smtp </code>

<code> MAIL_HOST=smtp.office365.com </code>

<code> MAIL_PORT=587 </code>

<code> MAIL_FROM_NAME='JUANITO PEREZ' </code>

<code> MAIL_USERNAME='JUANITO.PEREZ@JUANITO.PE' </code>

<code> MAIL_PASSWORD='********' </code>

<code> MAIL_ENCRYPTION=tls </code>

## Correr Predator

Acceder a la ruta en el navegador web:

<strong> notificaciones.test</strong>

Configurar la base de datos, copia oculta y parámetros de la plantilla de correo electrónico.




## Créditos
Jesús Cieza Arteaga

Predator es un sistema desarrollado con el framework Laravel y base de datos MySql.  
