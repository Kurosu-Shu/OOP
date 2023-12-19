<?php 

trait Math 
{
    public function add ($a, $b)
    {
        return $a + $b;
    }
}

trait Area 
{   
    private $PI = 3.14;

    public function circle($r) 
    {
        return $this->PI * $r * $r;
    }
}

class Calculator
{
    use Math, Area;
}

$calc = new Calculator;

 echo $calc->add(1, 10) . "<br>";
 echo $calc->circle(5);