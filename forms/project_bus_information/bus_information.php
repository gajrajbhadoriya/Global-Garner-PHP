<!DOCTYPE html>
<html>
	<head>
		<title>Bus Information</title>
    </head>
	<body>
		  
		  <form method="post" action="insertDATA.php"> 
		  	<h1 align="center"><u>Bus Information</u></h1>
		  
		  	<table border="5"  align="center" cellpadding="8" cellspacing="1" bgcolor="tan">
		  		<tr>
		  			<td bgcolor="silver"> Bus Agency Name:</td>
		  			<td ><input type="text" id="agency_name" name="agency_name" ></td> 
		  		</tr>
		  		<tr>
		  			<td bgcolor="blue">Bus Type:</td>
		  			<td><select id="bus_type" name="bus_type">
						<option value="">--Select Bus Type--</option>
						<option value="Sliper">Sliper</option>
						<option value="Seating">Seating</option>
						<option value="Volvo">Volvo</option>
						<option value="S.T">S.T</option>
					</select></td>
		  			
		  			
		  		</tr>
		  		<tr>
		  			<td bgcolor="silver">Seating Capacity:</td>
		  			<td><input type="text" id="seating_capacity" name="seating_capacity" ></td>
		  		</tr>
		  		<tr>
				<td bgcolor="blue">Bus Number</td>
				<td><input type="text" id="bus_no" name="bus_no" >
					
				</td>
			    </tr>
			    <tr>
				<td bgcolor="silver">Bus Description:</td>
				<td>
					<textarea id="bus_description" name="bus_description">
					</textarea>
		  		</td>
			</tr>
			<tr>
				<td bgcolor="blue">Driver Name:</td>
				<td><input type="text" id="driver_name" name="driver_name" >
					
				</td>
			</tr>
			<tr>
		  			<td bgcolor="silver">Location:</td>
		  			<td >
		  		    <input type="checkbox" id="chk1" name="location[]" value="Ahmedabad">Ahmedabad
					<input type="checkbox" id="chk2" name="location[]" value="Surat">Surat
					<input type="checkbox" id="chk3" name="location[]" value="Bhavnagr">Bhavnagr
					<input type="checkbox" id="chk4" name="location[]" value="Surendranagr">Surendranagr</td> 
		  		</tr>
		  		<tr>
		  			<td bgcolor="blue">Speed Type :</td>
		  			<td>
		  				<input type="radio" id="rd01" name="speed_type" value="Express">Express
					    <input type="radio" id="rd02" name="speed_type" value="Local">Local</td>
		  		</tr>
		  		<tr>
				<td bgcolor="silver">Fair:</td>
				<td>
				      <input type="text" id="fair" name="fair" >	
				</td>
			</tr>
			<tr>
		  		<td bgcolor="blue">From Time:</td>
		  		<td><input type="text" id="from_time" name="from_time" ></td>
		  	</tr>
		  	<tr>
		  		<td bgcolor="silver">To Time:</td>
		  		<td><input type="text" id="to_time" name="to_time" ></td>
		  	</tr>
		  	<tr>
		  			<td colspan="2"  align="center" bgcolor="yellow"><input type="submit" id="sumbit"
		  				name="submit" value="Submit"></td>
		  		</tr>
 	</table>
    </form>
    </body>

	