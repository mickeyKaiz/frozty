<?php 
class request{
    public function __construct() {
        foreach ($_REQUEST as $key => $value) {
            $this->$key = $value;
        }
    }

    public function get($key){
        if (isset($this->$key)) {
            return $this->$key;
        } else {
            return null;
        }
    }
}