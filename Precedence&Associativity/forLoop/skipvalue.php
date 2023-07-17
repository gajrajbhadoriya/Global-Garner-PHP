<?php
    
    $array = array(
        'pop0',
        'pop1',
        'pop2',
        'pop3',
        'pop4',
        'pop5',
        'pop6',
        'pop7',
        'pop8'
    );
    echo "Tot Before: ".count($array)."<br><br>";
    $count = count($array);
    for ($i=0; $i<$count; $i++) {
        if ($i === 3) {
            unset($array[$i]);
        }
        echo "Count: ".count($array). " - Position: ".$i."<br>";
    }
    echo "<br> Tot After: ".count($array)."<br>";
    
?>