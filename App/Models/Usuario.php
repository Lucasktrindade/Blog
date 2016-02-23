<?php
/**
 * Created by PhpStorm.
 * User: LUCAS
 * Date: 20/02/2016
 * Time: 16:02
 */

namespace App\Models;
use Blog\Db\Table;
use Blog\Session\Session;

class Usuario extends Table
{
    public function verificaLogin($usuario,$senha)
    {
<<<<<<< HEAD

=======
        $sessao = new Session();
        $sessao->Destroy();
        echo $sessao->SesID();
>>>>>>> 134e838b8b5aa220a6bd9272646ec990ec4866fc
    }
}