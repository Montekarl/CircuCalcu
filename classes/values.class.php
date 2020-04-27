<?php

declare (strict_types=1);

class Values
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
}
