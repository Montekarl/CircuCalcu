<?php

interface shapeInterface
{
    public function formulas();
}

interface roundedInterface
{
    public function radius();
}

class Square implements shapeInterface
{
    public function perimeter()
    {

    }

    public function formulas()
    {
        $this->perimeter;
    }
}

class Circle implements shapeInterface, roundedInterface
{
    public function radius()
    {

    }

    public function perimeter()
    {
        
    }

    public function formulas()
    {
        $this->radius();
        $this->perimeter();
    }
}

class Triangle implements shapeInterface
{
    public function perimeter()
    {
        
    }

    public function formulas()
    {
        $this->perimeter;
    }
}

class Rectangle implements shapeInterface
{
    public function perimeter()
    {
        
    }

    public function formulas()
    {
        $this->perimeter;
    }
}

class Rhomb implements shapeInterface
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

$shapeType = new Rhomb();

$ShapeCalc = new Calculations();
$ShapeCalc->calculation($shapeType);