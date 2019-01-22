<?php

class node {
    
    var $arr = array('0' =>'alpha' ,'1' =>'beta' ,'2' =>'gamma' ,'3' =>'delta' ,'4' =>'epsilon');

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

    function router() {
        if (isset($_GET['url'])) {
            $url = $_GET['url'];
            $url = rtrim($url,'/');
            $url = explode('/',$url);

            foreach ($url as $key => $value) {
                if (isset($this->arr[$key])) {
                    $this->set($this->arr[$key],$value);
                } else {
                    $this->set($key,$value);
                }

                
            }

            
        }

        require_once "app".DS."controllers".DS."root.php";
        $root = new Root();

        if(isset($this->alpha)){
            $alpha = $this->alpha;
            $file = "app".DS."controllers".DS.$alpha.".php";
            if (file_exists($file)){
                require_once $file;
                $app = new $alpha;
                if (isset($this->beta)) {
                    $beta = $this->beta;
                    if (method_exists($alpha,$beta)) {
                        $app->$beta();
                    } else $app->main();
                } else $app->main();
            } else {
                if(method_exists('Root',$alpha)) {
                    $root->$alpha();
                }
            }
        } else {
            $root->main();
        }
    }  
    
}
