<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema de ventas</title>
    <link href="<?php asset("css/bootstrap.min.css") ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <style>

    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center" >
                <br>
                <div class="jumbotron">
                	<div class="container">
                        <h1 class="titulo">Modular php</h1>
                        <p>Simple y util para comenzar en php</p>
                        <p>
                         <a target="_blank" href="https://github.com/eytoo/modular-php" class="btn btn-primary btn-lg">Ver proyecto <i class="fa fa-github"></i></a>
                     </p>
                 </div>
             </div>
         </div>
         <div class="col-md-12">
            <h3>Configuración del .htaccess</h3>
            <p>Para el correcto funcionamiento de modular, debes de cambiar la configuración del archivo .htaccess, especificamente lo que debes de modificar es el <code>RewriteBase</code> colocando la ruta base donde esta tu proyecto.</p>
<pre>
RewriteEngine On
RewriteBase <span class="text-danger">/proyectos/sistemaventas/</span>
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.+)$ index.php?uri=$1 [QSA,L]
</pre>
            <h3>Configuración de base de datos</h3>
            <p>
                Para hacer uso de una base de datos MySQL necesitamos realizar una configuración simple en el archivo <code>config.php</code> que se encuentra en la ruta <code>config/config.php</code>, en este archivo encontraremos el siguiente código:
            </p>
<pre><span class="text-success">// host</span>
define("HOST","<span class="text-primary">localhost</span>");
<span class="text-success">// base de datos</span>
define("DB","<span class="text-primary">bd_ventas</span>");
<span class="text-success">//usuario</span>
define("USER","<span class="text-primary">root</span>");
<span class="text-success">//password</span>
define("PASSWORD","<span class="text-primary">pwd</span>");</pre>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>

    <div class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">
            <p class="navbar-text pull-left">© 2014 - 2016 eytoo estudios - formando código
                <a href="https://formandocodigo.com/profesor/cesar-mejia" target="_blank" > Cesar Mejia</a>
            </p>
            <a href="http://youtube.com/imarvdt" target="_blank" class="navbar-btn btn-danger btn pull-right">
                <span class="fa fa-youtube"></span>  Vistar canal</a>
            </div>
        </div>

    </body>
    </html>