<?php
/**
 * Created by PhpStorm.
 * User: lucas.trindade
 * Date: 18/02/2016
 * Time: 15:09
 */

namespace Blog\Db;


abstract class Table
{
    protected $db;
    protected $table;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function listar()
    {
        $query= "Select * from {$this->table}";
        return $this->db->query($query);
    }
}