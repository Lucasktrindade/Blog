<?php
/**
 * Created by PhpStorm.
 * User: lucas.trindade
 * Date: 15/02/2016
 * Time: 17:15
 */

namespace Blog\Di;

class Container
{
    public static function getClass($nome)
    {
        $str_class = "\\App\\Models\\".ucfirst($nome);
        $class = new $str_class(\App\Init::getDb());
        return $class;
    }
}