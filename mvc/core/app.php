<?php 
    class App{

        //http://localhost/prj_test/Home/SayHi/1/2/3
        
        protected $controller = "Home";
        protected $action = "index";
        protected $params = [];


        function __construct(){
            $arr = $this->urlProcess();

            //xu ly controller
            if(isset($arr[0])){
                if(file_exists("./mvc/controllers/".$arr[0].".php")){
                    $this->controller = $arr[0];
                }
                unset($arr[0]);
            }
    
            require_once "./mvc/controllers/".$this->controller.".php";
            
            $this->controller = new $this->controller;

            //xu ly action
            if(isset($arr[1])){
                if(method_exists($this->controller, $arr[1])){
                    $this->action = $arr[1];
                }
                unset($arr[1]);
            }
            
            //xu ly params
            $this->params = $arr ? array_values($arr) : [];
               
            //gọi method-action của class-controller có tham số truyền vào là-params

            call_user_func_array([$this->controller, $this->action], $this->params);
            
        }

        function urlProcess(){
            if(isset($_GET["url"])){
                return explode("/", filter_var(trim($_GET["url"], "/")));
            }
        }

    }
?>