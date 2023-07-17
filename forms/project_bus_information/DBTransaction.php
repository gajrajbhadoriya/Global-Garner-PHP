<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php";

  function __construct()
  {
  $this->pdo= new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }
  

  // sql to create table
  // $sql = "CREATE TABLE Bus_Information (
  // id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  // Bus_Agency_Name VARCHAR(30),
  // Bus_Type VARCHAR(30),
  // Seating_Capacity int(10),
  // Bus_Number int(10),
  // Bus_Description VARCHAR(30),
  // Driver_Name VARCHAR(30),
  // Locations VARCHAR(30),
  // Speed_Type VARCHAR(15),
  // Fair VARCHAR(15),
  // From_Time VARCHAR(10),
  // To_Time VARCHAR(10),
  // reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  // )";

  // use exec() because no results are returned
  // $conn->exec($sql);
  // echo "Table MyGuests created successfully";
//} 
//catch(PDOException $e) {

  function insertTransaction($sql, $data)
{

    $stmt = $this->pdo->prepare($sql);
    $stmt->execute($data);
    // $this->last_insert_id = $this->pdo->lastInsertId();
    // return $this->last_insert_id;
}
  echo $sql . "<br>" . $e->getMessage();




 
$conn = null;
?>