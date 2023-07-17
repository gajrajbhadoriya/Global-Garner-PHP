<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$file = fopen("data_employee.csv", "r")or die("Unable to open file!");


$header = fgetcsv($file);
?>
    <table>
    <tr>
        <?php
        foreach ($header as $column) {
            echo "<th>$column</th>";
        }
?>
    </tr>
    <?php while ($row = fgetcsv($file)) {
        echo "<tr>";


        foreach ($row as $column) {
            echo "<td>$column</td>";
        }

        echo "</tr>";
    }
?>
    </table>
</body>
</html>
