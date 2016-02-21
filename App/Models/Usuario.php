<?php
/**
 * Created by PhpStorm.
 * User: LUCAS
 * Date: 20/02/2016
 * Time: 16:02
 */

namespace App\Models;


class Usuario
{
    public function verificaLogin($usuario,$senha)
    {
        return $usuario.$senha;
    }
}