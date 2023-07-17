<?php

namespace App\Models;

use App\Abstracts\Shape;

class Square extends Shape
{
    protected $length = 4;

    public function getArea()
    {
        return pow($this->length, 2);
    }
}
