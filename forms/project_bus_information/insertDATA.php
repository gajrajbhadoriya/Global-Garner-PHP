<?php
   require_once('DBTransaction.php');

    if(isset($_POST['submit']))
{

	$agency_name = $_POST['agency_name'];
	$bus_type = $_POST['bus_type'];
	$seating_capacity = $_POST['seating_capacity'];
	$bus_no = $_POST['bus_no'];
	$bus_description = $_POST['bus_description'];
    $driver_name = $_POST['driver_name'];
    $location = $_POST['location'];
    $speed_type = $_POST['speed_type'];
    $fair = $_POST['fair'];
    $from_time = $_POST['from_time'];
    $to_time = $_POST['to_time'];
    // $submit = $_POST["submit"];

	$transaction = new DBTransaction();
	$query = "insert into bus_Information(agency_name,bus_type,seating_capacity,bus_no,bus_description,driver_name,location,speed_type,fair,from_time,to_time) values(:agency_name , :$bus_type , :$seating_capacity , :$bus_no, :$bus_description , :$driver_name , :$location , :$speed_type , :$fair , :$from_time , :$to_time)";
	$insertId = $transaction->insertTransaction($query, [
		   'agency_name' => $agency_name,
		   'bus_type' => $bus_type,
		   'seating_capacity' => $seating_capacity,
		   'bus_no' => $bus_no,
		   'bus_description' => $bus_description,
		   'driver_name' => $driver_name,
		   'location' => $location,
		   'speed_type' => $speed_type,
		   'fair' => $fair,
		   'from_time' => $from_time,
		   'to_time' => $to_time,
		  
	]);

	 echo 'DONE'. PHP_EOL;
	 
	 echo $insertId;
	
	 echo "DATA INSERTED SUCCESSFULLY";

// 	function insertTransaction($sql, $data)
// {

//     $stmt = $this->pdo->prepare($sql);
//     $stmt->execute($data);
//     // $this->last_insert_id = $this->pdo->lastInsertId();
//     // return $this->last_insert_id;
// }

	// $query = "insert into testusers (title) values(:title)";
	// $insertId = $transaction->insertTransaction($query, [
	//   'title' => $title,
	// ]);
	// echo 'DONE'. PHP_EOL;
	// echo $insertId;
}
?>



?>