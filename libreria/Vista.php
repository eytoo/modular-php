<?php namespace vista;
/**
 * Created by Eyetoo estudios.
 * User: Cesar Mejia
 * Date: 13/09/2015
 * Time: 10:11 AM
 */
use Twig_Loader_Filesystem;
use Twig_Environment;
class Vista{

    public static function crear($path,$key=null,$value=null){
        //comprobamos si existe la variable path
        if($path != ""){
            $paths = explode(".",$path); // convertimos a un array separado por puntos
            $ruta = ""; // inicializamos

            $usarTemplate = false;

            if($paths[count($paths) - 1] == "twig") {
                if(count($paths) > 2){
                    for ($i = 0; $i < count($paths); $i++) { //recorrer el $paths
                        if ($i == count($paths) - 2) { // comprobamos si es el ultimo
                            $ruta .= $paths[$i] . "."; // le ponemos .html
                        } else {
                            $ruta .= $paths[$i] . "/"; // le concatenamos (/)
                        }
                    }
                    $ruta = trim($ruta,"/");
                }else{
                    $ruta = $path;
                }
                $usarTemplate = true;
            }
            else{
                for ($i = 0; $i < count($paths); $i++) { //recorrer el $paths
                    if ($i == count($paths) - 1) { // comprobamos si es el ultimo
                        $ruta .= $paths[$i] . ".php"; // le ponemos .php
                    } else {
                        $ruta .= $paths[$i] . "/"; // le concatenamos (/)
                    }

                }
                $usarTemplate = false;
            }

            // comprobar si ese archivo existe
            if(file_exists(VISTA_RUTA.$ruta)){
                //comprobar si existe $key
                $dataToTwig = array();

                if(!is_null($key)){
                    if(is_array($key)){
                        // extrae los keys y los convierte a variables
                        extract($key,EXTR_PREFIX_SAME,"");
                        $dataToTwig = $key;
                    }else{
                        //("index","usus",$usuarios)
                        //$usus = $usuarios;
                        ${$key} = $value;
                        $dataToTwig = array($key=>$value);
                    }
                }

                //Define que motor usar: Twig o PHP normal
                if($usarTemplate){

                    $loader = new Twig_Loader_Filesystem(RUTA_BASE."view");
                    $twig = new Twig_Environment($loader,  array('debug' => true));
                    echo $twig->render($ruta, $dataToTwig);

                }else{
                   include VISTA_RUTA.$ruta;
                }

            }else{
                die("no existe la vista");
            }

        }
        return null;
    }

}