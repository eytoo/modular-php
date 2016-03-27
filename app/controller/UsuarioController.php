<?php
/**
 * Created by PhpStorm.
 * User: eytoo
 * Date: 7/10/2015
 * Time: 1:06 AM
 */
use \App\model\User;
class UsuarioController {

    public function index(){

    }

    public function agregar(){
        $user = new User();
        $user->email="test@eytoo.com";
        $user->usuario="Alan Mejia";
        $user->pass=crypt("1234",'$2a$07$usesomesillystringforsalt$');
        $user->privilegio = "admin";
        $user->guardar();
    }

}