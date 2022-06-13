<?php 
class Animal{
  // attributes of the class Animal
  private $name;
  private $age;
  private $colour;
  // Animal class constructor 
  public function __construct($name, $age, $colour){
    $this->name = $name;
    $this->age = $age;
    $this->colour = $colour; 
  }
  
  /* getters and setters created. Setters functions created to create 
  set attributes. Getter functions created to get the attributes.*/ 
  public function set_name($name){
    $this->name = $name;
  }
  
  public function get_name(){
    return $this->name;
  }

  public function set_age($age){
    $this->age = $age;
  }

  public function get_age(){
    return $this->$age;
  }

  public function set_colour($colour){
    $this->colour = $colour;
  }

  public function get_colour(){
    return $this->$colour;
  }
}





?>