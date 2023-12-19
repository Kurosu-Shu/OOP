<?php

  class Human
  {
    public function __call($name, $args) {
        echo "there is no method";
    }

    public static function __callStatic($name, $args) {
        echo "there is no static method";
    }
  }

  $man = new Human;

  $man->run();
  echo "<br>";
  Human::run();
  echo "<br>";
  class Math
  {
    private $PI = 3.14;
    public function __get($name)
    {
    echo "Cannot get $name";
    }
    public function __set($name, $value)
    {
    echo "Cannot set $name with $value";
    }
  }

  // $obj = new Math;
  // $obj->PI;
  // $obj->PI = 3.144;

  class Animal 
  {
     private $text = "This is animal species";

     public function __toString()
     {
      return "Animal : {$this->text}";
     }
  }

  $obj = new Animal;
  echo $obj;


  




