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

/* getters and setters created. Setters functions created to create   
set attributes. Getter functions created to get the attributes.*/ 
    public function set_breed($breed){
    $this->$breed = $breed;
  }
  

  public function get_breed(){
    return $this->$breed; 
  }


?> 