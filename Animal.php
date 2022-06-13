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

  public function set_name($name){
    $this->name = $name;
  }
  
  public function get_name(){
    return $this->name;
  }
}





?>