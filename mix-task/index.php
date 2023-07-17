<?php
$numbers = [1, 2, 3]; // initialize the array with values

// check if a number is submitted
if(isset($_POST['number'])) {
    $new_number = $_POST['number'];

    // validate the input as a number
    if(is_numeric($new_number)) {
        // add the new number to the array
        array_push($numbers, $new_number);
    } else {
        echo "Please enter a valid number.";
    }
}

// check if the reset button is clicked
if(isset($_POST['reset'])) {
    $numbers = [1, 2, 3]; // reset the array
}

?>

<form method="post">
    <label for="number">Enter a number:</label>
    <input type="text" name="number" id="number">
    <button type="submit">Add to array</button>
    <button type="submit" name="reset">Reset array</button>
</form>

<p>Current array: <?php echo implode(", ", $numbers); ?></p>