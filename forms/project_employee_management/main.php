<?php
 require_once("connection.php");
 $sql = "insert into user  (name, email, password) values(:name, :email, :password)";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
 




?>