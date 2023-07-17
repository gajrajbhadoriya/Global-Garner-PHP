<?php

class Number
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function reverse()
    {
        return strrev($this->value);
    }

    public function sumDigits()
    {
        $sum = 0;
        $digits = str_split($this->value);
        foreach ($digits as $digit) {
            $sum += intval($digit);
        }
        return $sum;
    }

    public function averageDigits()
    {
        $digits = str_split($this->value);
        $count = count($digits);
        if ($count > 0) {
            return $this->sumDigits() / $count;
        } else {
            return 0;
        }
    }
}

// $num = readline("Enter a number: ");
if (isset($_POST['submit'])) {
    $num = $_POST['num'];

    $number = new Number($num);

    if (!ctype_digit($num)) {
        echo "Invalid input. Please enter an integer" ."</br>";
        exit;
    }
    echo "Reverse of number: " . $number->reverse() . "</br>";
    echo "Sum of digits: " . $number->sumDigits() . "</br>";
    echo "Average of digits: " . $number->averageDigits() . "</br>";
}
?>

    <ul>
        <li><a href="index.php">index-page</a></li>
    </ul>
