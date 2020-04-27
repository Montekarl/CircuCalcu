<?php 

declare (strict_types=1);
class Mathematics
{
    const PI=3.14159265359;
    public $shape;
    public $input;

    public function defineShape(string $shape)
    {
        $this->shape = $shape;
        return $shape; 
    }

    public function defineValue(int $value)
    {
        $this->input = $value;
        return $value;
    }

    public function calcuCalcu(string $shape, int $input)
    {
        $this->input = $input;
        $this->shape = $shape;
        
        switch($shape)
        {
            case 'circle' :
                $surfaceArea = $input * pow(self::PI, 2);
                $perimeter = 2 * $input * self::PI;
                return "You have chosen a ". $this->defineShape($shape) . 
                "<br/> if the radius of such circle is " . $this->defineValue($input) . 
                "<br> then the surface area of it is "
                . $surfaceArea . " square units <br/> and the circumference is " . $perimeter . " units";
                break;
            case 'square' :
                $this->input = $input;
                $surfaceArea = pow($this->input,2);
                $perimeter = 4 * $this->input;
                return "You have chosen a ". $this->defineShape($shape). 
                "<br/> if the side of such square is " . $this->defineValue($input) . 
                "<br/> then the surface area of it is " 
                . $surfaceArea . " square units <br/> and the perimeter is " . $perimeter . " units";
                break;
            default:
                echo "Error!";
            break;      
        }
    }

    public function __destruct()
    {
         
    }
}
?>