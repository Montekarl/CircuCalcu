<?php 
class Mathematics
{
    public static $pi=3.14159265359;
    public $radius;

    public function getRadius($radius)
    {
        $this->radius = $radius;
    }

    public function calcArea($radius)
    {
        $this->radius = $radius;
        $surfaceArea = pow($radius * self::$pi, 2);
        return $surfaceArea;
    }

    public function calcCircumference($radius)
    {
        $this->radius = $radius;
        $circumference = 2 * $radius * self::$pi;
        return $circumference;    
    } 
}
?>