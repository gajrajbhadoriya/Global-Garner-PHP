<?php

require_once('DBTransaction.php');


echo 'here'. PHP_EOL;

if(isset($_POST['submit'])){
   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = $_POST['password'];
        if(empty($username)){
            $usrnameErrMsg = 'username is required';
            //return err msg and print on index.php
        }
    
       
}
?>