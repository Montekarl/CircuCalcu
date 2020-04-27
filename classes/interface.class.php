<?php

interface shapeInterface
{
    public function formulas();
}

class Square extends Values implements shapeInterface 
{
    public function perimeter(int $side)
    {
        $this->input = $side;
        $perimeter = 4 * $side;
        return $perimeter;
    }

    public function surfaceArea(int $side)
    {
        $this->input = $side;
        $surfaceArea = pow($side,2);
        return $surfaceArea;
    }

    public function formulas()
    {
       $this->perimeter;
       $this->surfaceArea;
    }
}

class Circle extends Values implements shapeInterface
{
    public function circumference(int $radius)
    {
        $this->input = $radius;
        $circumference = 2*$radius*parent::PI;
        return $circumference;
    }

    public function surfaceArea(int $radius)
    {
        $this->input = $radius;
        $surfaceArea = $radius * pow(Values::PI,2);
        return $surfaceArea;
    }

    public function formulas()
    {
        $this->circumference;
        $this->surfaceArea;
    }
}

class Triangle extends Values implements shapeInterface
{
    public function perimeter()
    {
        
    }

    public function formulas()
    {
        $this->perimeter;
    }
}

class Rectangle extends Values implements shapeInterface
{
    public function perimeter()
    {
        
    }

    public function formulas()
    {
        $this->perimeter;
    }
}

class Rhomb extends Values implements shapeInterface
{
    public function perimeter()
    {
        
    }

    public function formulas()
    {
        $this->perimeter;
    }
}

class Calculations
{
    public function calculation(shapeInterface $shapeType)
    {
        $shapeType->formulas();
    }
}

$shapeType = new Square();

$Square01 = new Calculations();
$Square01->calculation($shapeType);