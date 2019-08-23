<?php
	              

	                //For showing the passengers table


					$con=mysqli_connect("localhost","root","","flightmanagementsystem");
					// Check connection
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}

					$result = mysqli_query($con,"SELECT * FROM passengers");

					/*echo "<table border='1'>
					<tr>
					<th>Firstname</th>
					<th>Lastname</th>
					</tr>";*/
					while($row = mysqli_fetch_array($result))
					{
				    
					echo "<tr>";
					echo "<td>" . $row['PName'] . "</td>";
					echo "<td>" . $row['PAge'] . "</td>";
					echo "<td>" . $row['PEmail'] . "</td>";
					echo "<td>" . $row['FDate'] . "</td>";
					echo "<td>" . $row['PTicketNo'] . "</td>";
					echo "<td>" . $row['PFlightNo'] . "</td>";
					echo "<td>" . $row['PFlightTime'] . "</td>";
					echo "<td>" . $row['PAirlines'] . "</td>";
					echo "<td>" . $row['PDest'] . "</td>";
				    echo "</tr>";
					}
					
					echo "</table>";

					mysqli_close($con);
?>