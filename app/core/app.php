<?php 

namespace MVC\core;

class app {

    private $controller = 'home';
    private $method = 'index';
    private $params = [];


    public function __construct()
    {
        $this->url();
        $this->render();
        
    }

    private function url (){
        if(!empty($_SERVER['QUERY_STRING'])){

        $url=explode( "/",$_SERVER['QUERY_STRING'] );
        //print_r($url);

        // this controller
        $this->controller= isset($url[0]) ? $url[0]."controller" : "homecontroller";
        // this method
        $this->method= isset($url[1]) ? $url[1] : "index";
        // delete the controller and method from the array
        unset($url[0],$url[1]);
        // start the params from index 0 not 2
        $this->params=array_values($url);
        ////print_r($this->params);

        }
        else{
            $this->controller="homecontroller";
            $this->method="index";
        }
    }
    private function render (){
        
        $controller=  "MVC\controllers\\". $this-> controller ;
        
        if(class_exists($controller)){

            if(method_exists($controller,$this->method)){

            $controller=new $controller;

            call_user_func_array( [ $controller , $this->method ] , $this->params );
            

                
            }

            else{

                echo "method not found";

            }
            
        }

        else{

            echo "class not found";
        }

    }


}

