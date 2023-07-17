<?php

class Calculator
{
    public $first_value;
    public $second_value;

    public function __construct($first_value, $second_value)
    {
        $this->first_value = $first_value;
        $this->second_value = $second_value;
    }

    public function add()
    {
        echo $this->first_value + $this->second_value. "</br>";
    }

    public function sub()
    {
        echo $this->first_value - $this->second_value . "</br>";
    }

    public function mul()
    {
        echo $this->first_value * $this->second_value . "</br>";
    }

    public function div()
    {
        echo $this->first_value / $this->second_value ;
    }
}

$add = new Calculator(5, 6);
$add->add();

$sub = new Calculator(5, 6);
$sub->sub();

$mul = new Calculator(5, 6);
$mul->mul();

$div = new Calculator(5, 6);
$div->div();
