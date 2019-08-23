<?php
	              
					$con=mysqli_connect("localhost","root","","flightmanagementsystem");
					// Check connection
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}

					$result = mysqli_query($con,"SELECT * FROM employee");

					/*echo "<table border='1'>
					<tr>
					<th>Firstname</th>
					<th>Lastname</th>
					</tr>";*/
					while($row = mysqli_fetch_array($result))
					{
				    
					echo "<tr>";
					echo "<td>". $row['pilot_id'] . "</td>";
					echo "<td>" . $row['employee_name'] . "</td>";
					echo "<td>" . $row['employee_contact'] . "</td>";
					echo "<td>" . $row['employee_address'] . "</td>";
					echo "<td>" . $row['employee_airlines'] . "</td>";
				    echo "</tr>";
					}
					
					echo "</table>";

					mysqli_close($con);
					?>