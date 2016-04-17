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

<h3>Gestor de plantilla: Twig</h3>
            <p>
                Para realizar vistas usando el gestor de plantillas <strong>Twig</strong> necesitas instalar composer y por medio de la linea de comando ejecutar: 
            </p>
<pre>
composer install
</pre>
