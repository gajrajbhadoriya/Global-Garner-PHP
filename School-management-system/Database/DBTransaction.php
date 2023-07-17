<?php

class DBTransaction
{
    protected $pdo;
    public $last_insert_id;
    public const DB_NAME       = 'school_management';
    public const DB_USER       = 'root';
    public const DB_PASSWORD   = '';
    public const DB_HOST       = 'localhost';

    public function __construct()
    {
         $this->pdo = new PDO("mysql:host=" . self::DB_HOST . ";dbname=" . self::DB_NAME, self::DB_USER, self::DB_PASSWORD);
         $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }

    public function insertTransaction($sql, $data)
    { 
         $stmt = $this->pdo->prepare($sql);
         $stmt->execute($data);
         $this->last_insert_id = $this->pdo->lastInsertId();
         return $this->last_insert_id;
    }

    public function insertTeacher($sql, $data)
    { 
         $stmt = $this->pdo->prepare($sql);
         $stmt->execute($data);
         $this->last_insert_id = $this->pdo->lastInsertId();
         return $this->last_insert_id;
    }

    public function deleteTransaction()
    {
         $data = [10];
         $sql = "DELETE FROM invoice1 WHERE id=?";
         $statement = $this->pdo->prepare($sql);
         if($statement->execute($data))
         {
             echo "Post deleted successfully!";
         }
    }

    public function updatETransaction()
    {
         $data = [7];
         $sql = "UPDATE invoice1  SET invoice_number=10002, invoice_date=22/10/1999 WHERE id=?";
         $statement = $this->pdo->prepare($sql);
         if($statement->execute($data))
         {
             echo "Post updated successfully!";
         }
    }

    public function producTDelete()
    {
         $data = [10];
         $sql = "DELETE FROM product WHERE id=?";
         $statement = $this->pdo->prepare($sql);
         if($statement->execute($data))
         {
             echo "Post deleted successfully!";
             echo "<br>";
         }
    }
 }