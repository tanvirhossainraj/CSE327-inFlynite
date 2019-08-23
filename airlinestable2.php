<?php
	              
	                //Showing the airline tables


					$con=mysqli_connect("localhost","root","","flightmanagementsystem");
					// Check connection
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}

					$result = mysqli_query($con,"SELECT * FROM airlines");

					/*echo "<table border='1'>
					<tr>
					<th>Firstname</th>
					<th>Lastname</th>
					</tr>";*/
					while($row = mysqli_fetch_array($result))
					{
				    
					echo "<tr>";
					echo "<td>" . $row['PilotId'] . "</td>";
					echo "<td>" . $row['Airline_Name'] . "</td>";
					echo "<td>" . $row['Airline_Contact'] . "</td>";
					echo "<td>" . $row['Airline_Country'] . "</td>";
					echo "<td>" . $row['Airline_Hub'] . "</td>";
				    echo "</tr>";
					}
					
					echo "</table>";

					mysqli_close($con);
?>