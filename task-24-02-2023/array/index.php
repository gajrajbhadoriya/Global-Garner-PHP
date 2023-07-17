<?php
$numbers = array(1,2,3);

if (isset($_POST['number'])) {
    $newNumber = $_POST['number'];

    if (is_numeric($newNumber)) {
        array_push($numbers, $newNumber);
    } else {
        echo "Please enter a valid number.";
    }
}

if (isset($_POST['reset'])) {
    $numbers = [1, 2, 3];
    // unset($numbers[$newNumber]);
    // print_r ($numbers);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="number">Number:</label>
        <input type="text" id="number" name="number" placeholder="Enter Number Only">
        <button type="submit">Add to array</button>
        <button type="submit" name="reset">Reset array</button>
        <p>Current array: <?php echo implode(", ", $numbers); ?></p>

    </form>
</body>
</html>