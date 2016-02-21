<?php

namespace App\Controllers;

use Blog\Controller\Action;
use Blog\Di\Container;

class Index extends Action
{

    public function index(){

        $artigo = Container::getClass("Artigo");
        $artigos = $artigo->listar();

        $this->view->nomes = $artigos;

        $this->render('index');
    }

    public function empresa(){

        $this->render('empresa');
    }
}