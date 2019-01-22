<?php
class frozty {
   
    private static $instance = array();
    public $templ = "startup";
    public $hash = "salsalsal";
    
    function set($key,$value) {
        $this->$key = $value;
    }

    function get($key) {
        if (isset($this->$key)) {
            return $this->$key;
        } else {
            return null;
        }
    }

    function main (){
        require_once "lib".DS."node.php";
        $node = frozty::getInstance('node');
        $node->router();
        
    }

    public static function getInstance($class) {
        if (isset(self::$instance[$class])) {
            return self::$instance[$class];
        } else {
            if (!class_exists($class)) 
                self::autoload($class);
            if ($class == "pdo")
                self::$instance[$class] = new PDO('mysql:host=localhost;dbname=frozty;', 'root', '');
            else
            self::$instance[$class] = new $class();
            return self::$instance[$class];
        }
    }

    private static function autoload($class) {

        $paths = array('lib','app'.DS.'controllers','app'.DS.'models');
        foreach ($paths as $path) {
            $file = $path.DS.$class.'.php';
            
            if (file_exists($file)) {
                require_once $file;
            }    
        }
    }

    public static function render($view){
        $frozty = frozty::getInstance("frozty");
        $frozty->set("view",$view);
        $templ = $frozty->get("templ");

        $request = frozty::getInstance('request');
        if ($request->get('templ')!=null)
            $templ = $request->get('templ');
        
        $basket = frozty::getInstance('basket');
        if ($request->get('api') === "json" && $request->get('hash')==="salsalsal")
            echo json_encode($basket);
        elseif ($request->get('api') === "html" && $request->get('hash')==="salsalsal")
            require_once "app".DS."views".DS.$view.DS."default.php";
        else 
            require_once "templates".DS.$templ.DS."index.php";   
    }

    public static function  app(){
        $frozty = frozty::getInstance("frozty");
        $view = $frozty->get('view');
        require_once "app".DS."views".DS.$view.DS."default.php";
    }

    public static function getModel($model) {
        $file = "app".DS."models".DS.$model.".php";
        if(file_exists($file)) {
            require_once $file;
            $model_object = new $model();
            return $model_object;
        } else {
            echo "Model Dosen't Exist";
        }
    }
}