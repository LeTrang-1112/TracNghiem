<?php
class App{
    protected $controller_arr=CONTROLLER_ARRAY;
    protected $controller=CONTROLLER_DEFAULT;
    protected $action=ACTION_DEFAULT;
    protected $params=[];

    function __construct(){
        $url = $this->checkURL();

        // Controller
        if(isset($url[0])){
            $contrl = strtolower($url[0]);
            if(array_key_exists($contrl, $this->controller_arr)){
                $contrl = $this->controller_arr[$contrl];
            }else {
                $contrl=CONTROLLER_DEFAULT;
            }
            if(file_exists("./mvc/controllers/".$contrl.".php") ){
                $this->controller = $contrl;
                unset($url[0]);
            }
        }
        require_once "./mvc/controllers/". $this->controller .".php";
        $this->controller = new $this->controller;

        // Action
        if(isset($url[1])){
            $act = strtolower($url[1]);
            if( method_exists( $this->controller , $act) ){
                $this->action = $act;
            }
            unset($url[1]);
        }
        
        // Params
        $this->params = $url?array_values($url):[];

        $controllerName = get_class($this->controller);
        if($controllerName=="admin"){
            if($this->action!="login"&&!isset($_SESSION['admin'])){
                $this->action=ACTION_DEFAULT;
            }
        }
        if($controllerName=="TaiKhoan"){
            if($this->action!="login"&&!isset($_SESSION['tai_khoan'])){
                $this->action=ACTION_DEFAULT;
            }
        }
        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    function checkURL(){
        if(isset($_GET["url"])){
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }
}
?>