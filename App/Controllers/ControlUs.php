<?php
/**
 * Created by PhpStorm.
 * User: LUCAS
 * Date: 20/02/2016
 * Time: 15:23
 */

namespace App\Controllers;
use Blog\Controller\Action;
use Blog\Di\Container;

class ControlUs extends Action
{
    public function index()
    {
        $this->render('admin');
    }

    public function entrar()
    {
        $email = isset($_POST['email']);
        $senha = isset($_POST['senha']);

        if(($email == TRUE)&&($senha== TRUE)){
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $usuario = Container::getClass("Usuario");
            $result = $usuario->verificaLogin($email,$senha);

            echo $result;

        }

    }
}