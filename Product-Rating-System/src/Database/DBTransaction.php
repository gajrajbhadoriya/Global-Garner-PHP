<?php
namespace App\Database;
use \PDO;
use \PDOException;
class DBTransaction
{
  private $host = "localhost";
  private $dbname = "test";
  private $username = "root";
  private $password = "";
  public $conn;

  public function getConnection() {
    $this->conn = null;
    try {
      $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->username, $this->password);
      $this->conn->exec("set names utf8");
    } catch(PDOException $exception) {
      echo "Connection error: " . $exception->getMessage();
    }
    return $this->conn;
  }
}

?>
