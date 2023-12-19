<?php
//this is the example of interface keyword
interface Animal
{
    public function move();
}

class Dog implements Animal
{
    public function move()
    {
        echo "the dog is running <br>";
    }

}

class Fish implements Animal
{
    public function move()
    {
        echo "the fish is swimming";
    }
}

function app(Animal $obj) 
{
    $obj->move();
}

app(new Dog);
app(new Fish);