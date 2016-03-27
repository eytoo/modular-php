<?php
/**
 * Created by PhpStorm.
 * User: eytoo
 * Date: 7/10/2015
 * Time: 12:34 AM
 */
use \vista\Vista;
use App\model\User;
use libreria\ORM\EtORM;

class AuthController {

    public function index(){
        
        redirecionar("/login/nuevo");

        //return Vista::crear("auth.login");
    }

    public function nuevo(){
        echo "asas";
    }

    public function ingresar(){
        if(val_csrf()){

            $email = input("email");
            $password = encriptar(input("password"));
            $objOrm = new EtORM();
            $data = $objOrm->Ejecutar("login",array($email,$password));

            if(count($data) > 0){

                $_SESSION["usuario"] = $data[0]["usuario"];
                $_SESSION["email"] = $data[0]["email"];
                $_SESSION["privilegio"] = $data[0]["privilegio"];

                redirecionar("/admin");
            }else{
                redirecciona()->to("/login")->withMessage(array(
                    "estado"=>"false",
                    "mensaje"=>"Usuario/Password incorrectos"
                ));
            }

        }else{
            echo "esta mal";
        }
    }

}