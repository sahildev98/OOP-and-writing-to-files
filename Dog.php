<?php
class Dog{
  // attributes of the class Dog
  // private variable can only be accessed inside the class. 
  private $name;
  private $breed;
  private $legs=4;

  // method to display the legs of dog
  public function display(){
    echo $this->legs;
  }
}


?> 