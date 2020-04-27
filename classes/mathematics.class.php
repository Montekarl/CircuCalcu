<?php 

declare (strict_types=1);

class Mathematics extends Values
{
    public function calcuCalcu(string $shape, int $input)
    {
        $this->input = $input;
        $this->shape = $shape;
        
        switch($shape)
        {
            case 'circle' :
                $surfaceArea = $input * pow(Values::PI, 2);
                $perimeter = 2 * $input * parent::PI;
                return "You have chosen a ". parent::defineShape($shape) . 
                "<br/> if the radius of such circle is " . parent::defineValue($input) . 
                "<br> then the surface area of it is "
                . $surfaceArea . " square units <br/> and the circumference is " . $perimeter . " units";
                break;
            case 'square' :
                $this->input = $input;
                $surfaceArea = pow($this->input,2);
                $perimeter = 4 * $this->input;
                return "You have chosen a ". parent::defineShape($shape). 
                "<br/> if the side of such square is " . parent::defineValue($input) . 
                "<br/> then the surface area of it is " 
                . $surfaceArea . " square units <br/> and the perimeter is " . $perimeter . " units";
                break;
            default:
                echo "Error!";
            break;      
        }
    }
}
