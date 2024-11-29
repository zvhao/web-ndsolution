<?php
class App{

    protected $controller="Home";
    protected $action="index";
    protected $params=[];

    function __construct(){
 
        $arr = $this->UrlProcess();

 
        // Controller
        if(isset($arr[0]) && file_exists("./mvc/controllers/".ucfirst($arr[0]).".php") ){
            $this->controller = ucfirst($arr[0]);
            unset($arr[0]);
        }
        require_once "./mvc/controllers/". $this->controller .".php";
        $this->controller = new $this->controller;

        // Action
        if(isset($arr[1])){
            if( method_exists( $this->controller , $arr[1]) ){
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }

        // Params
        // $this->params = $arr?array_values($arr):[];
        // show_array($arr);
        if (isset($arr) && !empty($arr)) {
            $this->params = $arr;
        }
        else {
            $this->params = [];
        }

        call_user_func_array([$this->controller, $this->action], $this->params);

    }

    function UrlProcess(){
        if( isset($_GET["url"]) ){
            return explode("/", trim($_GET["url"], "/"));
        }
    }

}
?>