<?php
class Dog extends Animal{
  // attributes of the class Dog
  // private variable can only be accessed inside the class. 
  private $breed;
  private $legs = 4;

  public function __construct($name, $age, $colour, $breed) {
    $this->name = $name;
    $this->breed = $breed;
    
  }
  // method to display the legs of dog
  public function display(){
    echo $this->$legs;
  }

  // setter method to set names for Dog objects
  
  
  // setter method to set names for Dog objects
  public function set_breed($breed){
    $this->$breed = $breed;
  }
}


?> 