<?php

class PalindromeChecker
{
    public static function isPalindrome($str)
    {
        $str = strtolower(preg_replace("/[^a-zA-Z0-9]/", "", $str));
        return $str === strrev($str);
    }
}

if (isset($_POST['submit'])) {
    $input = $_POST['input'];

    if (PalindromeChecker::isPalindrome($input)) {
        echo "Palindrome(true)";
    } else {
        echo "Not a palindrome(false)";
    }
}
?>

    <ul>
        <li><a href="index.php">index-page</a></li>
    </ul>
