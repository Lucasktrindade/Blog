<?php
/**
 * Created by PhpStorm.
 * User: lucas.trindade
 * Date: 11/02/2016
 * Time: 18:39
 */

namespace Blog\Controller;


class Action
{
    protected $view;
    protected $action;

    public function __construct()
    {
        $this->view = new \stdClass;
    }
    public function render($action,$layout = true){
        $this->action = $action;
        if($layout == true && file_exists("App/Views/layout.phtml")){
           include_once 'App/views/layout.phtml';
        }else{
            $this->content();
        }

    }

    public function content(){
        $atual = get_class($this);
        $single = strtolower(str_replace("App\\Controllers\\","",$atual));
        include_once 'App/views/'.$single.'/'.$this->action.'.phtml';
    }
}