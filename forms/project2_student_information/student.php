<?php

 require_once('test.php');
 require_once('DBTransaction.php');

class Student{
    // public $notify;
    public $insertTransaction;
    // public function __construct($notify)
    // {
    //    $this->notify = $notify;

    // }

    public function Getnotify()
    {
       echo "DATA INSERTED SUCCESSFULLY " ;
    }

    // public function insertTransaction($sql, $data)
    // {

    //     $stmt = $this->pdo->prepare($sql);
    //     $stmt->execute($data);
    //     $this->last_insert_id = $this->pdo->lastInsertId();
    //     return $this->last_insert_id;
    // }
}

$transaction = new DBTransaction();
$query = "insert into student (username, email, password) values(:username, :email, :password)";
$insertId = $transaction->insertTransaction($query, [
  'username' => $username,
  'email' => $email,
  'password' => $password
]);
echo 'DONE'. PHP_EOL;
echo $insertId;

$notify = new Student();
$notify->Getnotify();



?>