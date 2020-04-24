<?php 
class Mathematics
{
    public static $pi=3.14159265359;
    public $radius;

    public function getRadius(int $radius)
    {
        $this->radius = $radius;
    }

    public function calcArea(int $radius)
    {
        $this->radius = $radius;
        $surfaceArea = $radius * pow(self::$pi, 2);
        return $surfaceArea;
    }

    public function calcCircumference(int $radius)
    {
        $this->radius = $radius;
        $circumference = 2 * $radius * self::$pi;
        return $circumference;    
    } 
}
?>