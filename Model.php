<?php
class Model {
    private $value,$sve;
    
    public function set($userId){
        $conn = new Mysqli("localhost","root","","sakila");
        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
        $res=$conn->query("select * from actor limit 100");
        while($rw = $res->fetch_array()){
          $this->value[]=$rw; 
        }

        foreach($this->value as $ja){
            if($ja[0] == $userId){
                $sve=$ja;   
                return $sve;
            }
        } 
    }
}










