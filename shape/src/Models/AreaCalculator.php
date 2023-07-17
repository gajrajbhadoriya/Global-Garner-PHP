<?php

declare(Strict_types=1);

namespace App\Models;

use App\Interfaces\ShapeInterface;

class AreaCalculator
{
    protected $shapes;

    public function __construct($shapes = array())
    {
        $this->shapes = $shapes;
    }

    public function sum()
    {
        $area = array();

        foreach ($this->shapes as $shape) {
            if ($shape instanceof ShapeInterface) {
                $area[] = $shape->getArea();
            }
        }

        return array_sum($area);
    }
}
