<?php
/**
 * Created by PhpStorm.
 * User: LUCAS
 * Date: 20/02/2016
 * Time: 16:02
 */

namespace App\Models;
use Blog\Db\Table;

class Usuario extends Table
{
    public function verificaLogin($usuario,$senha)
    {
        $query = "SELECT $usuario FROM usuarios ";

        return $this->db->query($query);
    }
}