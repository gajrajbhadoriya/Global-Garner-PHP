<?php

declare(Strict_types=1);

namespace App\Abstracts;

use App\Interfaces\ShapeInterface;

class Shape implements ShapeInterface
{
    public $color;
    public function __construct($color = 'red')
    {
        $this->color = $color;
    }

    public function getcolor()
    {
        return $this->color;
    }

    public function getArea()
    {
        echo "getarea";
    }
}
