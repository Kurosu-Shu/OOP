<?php
//no need to build object with constructor
//we can use static keyword like this

class Vehicle 
{
    static $type = "car";
    
    static function info() {
        echo "this is a car type";
    }
}

echo Vehicle::$type . "<br/>";
Vehicle::info();