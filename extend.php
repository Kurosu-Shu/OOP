<?php
class Animal 
{
    
    public function __construct(protected $name)
    {
        $this->name = $name;
    }

    public function run() {
        echo "{$this->name} is running <br/>";
    }
}

$zebra = new Animal("zee");
$zebra->run();

class Horse extends Animal
{
    public function makeNoise() 
    {
        echo "{$this->name} is hooo hooo";
    }
}

class Donkey extends Horse
{
    //
}

$hokey= new Horse("hokey");
$hokey->run(); 
echo "<br/><br/>";
$hokey->makeNoise();
$dondon = new Donkey("dondon");

var_dump($dondon);