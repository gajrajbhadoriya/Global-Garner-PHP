<?php

require_once('DBTransaction.php');

echo 'here'. PHP_EOL;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    try {
        $errorflag = false;
        $title = $_POST['title'];
        if(empty($title)){
            $titleErrMsg = 'Name is required';
            //return err msg and print on index.php
            $errorflag = true;
        }
        if($errorflag){
            return $errrors;
        }
        $transaction = new DBTransaction();
        $query = "insert into testusers (title) values(:title)";
        $insertId = $transaction->insertTransaction($query, [
          'title' => $title,
        ]);
        echo 'DONE'. PHP_EOL;
        echo $insertId;
    } catch (\Exception $e) {
        echo 'ERROR'. PHP_EOL;
        echo $e->getMessage();
    }
}