<?php 

declare (strict_types=1);

class Mathematics extends Calculations
{
    public function calcuCalcu()
    {        
        switch($this->shape)
        {
            case 'circle' :
                $shapeType = new Square();

                $calc = new Calculations();
                $calc->calculation($shapeType);
                $calc = $this->$shapeType->formulas();
                echo $calc;
                break;
            case 'square' :
                $cal = $this->$shapeType->formulas();
                echo $calc;
                break;
            default:
                echo "Error!";
            break;      
        }
    }
}
