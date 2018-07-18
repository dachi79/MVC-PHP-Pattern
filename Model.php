<?php
class Model {
    private $value,$sve;
    
    public function set($userId){
        $conn = new Mysqli("localhost","root","","sakila");
        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
        $res=$conn->query("select actor.actor_id,actor.first_name,actor.last_name,country.country from actor inner join country where country.country_id = actor_id limit 100");
        while($rw = $res->fetch_array()){
          if($rw[0] == $userId){
              $this->sve = $rw;
              return $this->sve;
          }
        }
    }
}




/*
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
*/






