<?php
class Controller {
    private $converter,$value;
    
    public function __construct($converter){
        $this->converter = $converter;
    }
    public function uzmi($br){
            $this->value=$this->converter->set($br);
            return $this->value;
            //print_r($this->converter);
    }
}



