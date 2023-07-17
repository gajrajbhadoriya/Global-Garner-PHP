<?php
$date = date('H');
if($date < 10)
{
    echo "GOOD MORNING";
}
elseif($date < 20)
{
    echo "NICE DAY";
}
else{
    echo "Good Night";
}
?>