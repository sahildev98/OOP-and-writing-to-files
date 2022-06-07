<?php
class Dog{
  // attributes of the class Dog
  // private variable can only be accessed inside the class. 
  private $name;
  private $breed;
  public $legs = 4;

  // method to display the legs of dog
  public function display(){
    echo $this->$legs;
  }

  // setter method to set names for Dog objects
  public function set_name($name){
    $this->$name = $name;
  }
  
  // setter method to set names for Dog objects
  public function set_breed($breed){
    $this->$breed = $breed;
  }
}


?> 