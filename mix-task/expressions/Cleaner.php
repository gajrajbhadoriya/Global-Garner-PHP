<?php

class Cleaner
{
    public function removeNonNumericChars($string)
    {
        $numeric_string = preg_replace("/[^0-9]/", "", $string);
        return $numeric_string;
    }

    public function removeNonAlphaSpaceChars($string)
    {
        $alpha_space_string = preg_replace("/[^a-zA-Z\s]/", "", $string);
        return $alpha_space_string;
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $input_string = $_POST["input"];
    $cleaner = new Cleaner();

    if ($_POST["method"] === "numeric") {
        $clean_string = $cleaner->removeNonNumericChars($input_string);
    } elseif ($_POST["method"] === "alpha_space") {
        $clean_string = $cleaner->removeNonAlphaSpaceChars($input_string);
    }

    echo "Cleaned string: " . $clean_string;
}

?>

    <ul>
        <li><a href="index.php">index-page</a></li>
    </ul>
