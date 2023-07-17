<?php

namespace App\dataCalculator;

use DateTime;

class DateCalculator
{
    public $date1;
    public $date2;
    private $months;
    private $days;

    public function __construct($date1, $date2)
    {
        $this->date1 = new DateTime($date1);
        $this->date2 = new DateTime($date2);

        $this->months = array(
            1 => 'January',
            2 => 'February',
            3 => 'March',
            4 => 'April',
            5 => 'May',
            6 => 'June',
            7 => 'July',
            8 => 'August',
            9 => 'September',
            10 => 'October',
            11 => 'November',
            12 => 'December'
        );

        $this->days = array(
            'Sunday',
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Friday',
            'Saturday'
        );
    }

    public function getDifference()
    {
        $interval = $this->date1->diff($this->date2);
        return array(
            'years' => $interval->y,
            'months' => $interval->m,
            'days' => $interval->d
        );
    }

    public function getMonthName($date)
    {
        return $this->months[$date->format('n')];
    }

    public function getDayName($date)
    {
        return $this->days[$date->format('w')];
    }
}

if (isset($_POST['submit'])) {
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];

    $calculator = new DateCalculator($date1, $date2);

    $diff = $calculator->getDifference();
    echo "Difference between $date1 and $date2:\n";
    echo $diff['years'] . " years, " . $diff['months'] . " months, " . $diff['days'] . " days\n";

    echo "Month of $date1: " . $calculator->getMonthName($calculator->date1) . "<\br>";
    echo "Day of $date1: " . $calculator->getDayName($calculator->date1) ."<\br>";
    echo "Month of $date2: " . $calculator->getMonthName($calculator->date2) ."<\br>";
    echo "Day of $date2: " . $calculator->getDayName($calculator->date2) ."<\br>";
}

?>

    <ul>
        <li><a href="index.php">index-page</a></li>
    </ul>
