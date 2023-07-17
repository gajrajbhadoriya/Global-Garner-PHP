<?php

// $obj = new mysqli("localhost","root","","php");


// if($obj->connect_errno!=0)
// {
// 	echo $obj->connect_error;
// 	exit;
// }


if(isset($_POST["submit"]))
{

$agency_name=$_POST["agency_name"];
$bus_type=$_POST["bus_type"];
$seating_capacity=$_POST["seating_capacity"];
$bus_no=$_POST["bus_no"];
$bus_description=$_POST["bus_description"];
$driver_name=$_POST["driver_name"];
$location=$_POST["location"];
$location1 = implode(",",$location);

$speed_type=$_POST["speed_type"];
$fair=$_POST["fair"];
$from_time=$_POST["from_time"];
$to_time=$_POST["to_time"];
$submit = $_POST["submit"];
//$exe=$obj->query("insert into bus_information(agency_name,bus_type,seating_capacity,bus_no,bus_description,driver_name,location,speed_type,fair,from_time,to_time) values('$agency_name','$bus_type','$seating_capacity','$bus_no','$bus_description','$driver_name','$location1','$speed_type','$fair','$from_time','$to_time')");

//echo $agency_name . "</br>" . $bus_type . "</br>" . $seating_capacity . "</br>" . $bus_no . "</br>" . $bus_description . "<br>" . $driver_name ."</br>" .  $location1 . "</br>"  . $speed_type . "</br>" .  $fair . "</br>" . $from_time . "</br>" . $to_time . "</br>" .  $submit . "</br>" ;


}

?>

<html>
    <head>
        <title> BLUE PRINT BUS INFROMATION</title>
    </head>
    <body>
        <ul><h1 align="center"> BLUE PRINT BUS INFROMATION</h1></ul>
        <table align="center" bgcolor="Tan" border="10">
            <tr>
                <th>
                    Agency_name:
                </th> 
                <td>
                    <?php echo $agency_name; ?>
                </td>  
            </tr>
            <tr>
                <th>
                 Bus_type:
                </th> 
                <td>
                    <?php echo $bus_type; ?>
                </td>  
            </tr>
            <tr>
                <th>
                 Seating_capacity:
                </th> 
                <td>
                    <?php echo $seating_capacity; ?>
                </td>  
            </tr>
            <tr>
                <th>
                bus_no:
                </th> 
                <td>
                    <?php echo $bus_no; ?>
                </td>  
            </tr>
            <tr>
                <th>
                Bus_description:
                </th> 
                <td>
                    <?php echo $agency_name; ?>
                </td>  
            </tr>
            <tr>
                <th>
                   Driver_name:
                </th> 
                <td>
                    <?php echo $driver_name; ?>
                </td>  
            </tr>
            <tr>
                <th>
                Location:
                </th> 
                <td>
                    <?php echo  $location1; ?>
                </td>  
            </tr>
            <tr>
                <th>
                Speed_type:
                </th> 
                <td>
                    <?php echo $speed_type; ?>
                </td>  
            </tr>
            <tr>
                <th>
                Fair:
                </th> 
                <td>
                    <?php echo $fair; ?>
                </td>  
            </tr>
            <tr>
                <th>
                From_time:
                </th> 
                <td>
                    <?php echo $from_time; ?>
                </td>  
            </tr>
            <tr>
                <th>
                To_time:
                </th> 
                <td>
                    <?php echo $to_time; ?>
                </td>  
            </tr>
            <tr align="center">
                <th colspan="2">
                    <button>Download PDF</button>
                </th>
            </tr>

        </table>
    </body>
</html>
