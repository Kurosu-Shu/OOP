<?php
 class Animal
{
    final public function run()
    {
       echo "Animal is running...";
    }
}
class Dog extends Animal
{
    // public function run()
    // {
    //    echo "The dog is running...";
    // } 
    //cause error, so I comment it.
}

//using final keyword becoz it doesn't allow you to override