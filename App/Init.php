<?php

namespace App ;
use Blog\Init\Bootstrap;

class Init extends Bootstrap
{
    protected function initRoutes()
    {
        $ar['home']=array('route'=>'/','controller'=>'index','action'=>'index');
        $ar['empresa']=array('route'=>'/empresa','controller'=>'index','action'=>'empresa');
        $ar['admin']=array('route'=>'/admin','controller'=>'ControlUs','action'=>'index');
        $ar['entrar']=array('route'=>'/admin/painel','controller'=>'ControlUs','action'=>'entrar');

        $this->setRoutes($ar);
    }
    public static function getDb()
    {
        $db = new \PDO("mysql:host=localhost;dbname=blog","root","");
        return $db;
    }
}