<?php
class Product{
    public $name ;
    public $qty;
    public $price;

    public function __construct($name,$qty,$price)
    {
        $this->name   = $name;
        $this->qty    = $qty;
        $this->price  = $price;
    }
}
?>