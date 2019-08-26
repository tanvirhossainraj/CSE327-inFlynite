<?php 

	include_once("Connection.php");
	
	 
		$PName 	= $_POST['fano'];
		$Age	= $_POST['fatimes'];
		$Email = $_POST['fadest'];
        $Date = $_POST['fagate'];
        $Ticket = $_POST['fastatus'];
        $FlightNo = $_POST['fafno'];
        $FlightTime = $_POST['fatime'];
        $Airlines = $_POST['fair'];
        $To = $_POST['fadestin'];
		
		
		$OriginalFlightNo = $_POST['originalFlight'];
		
		
	 	$sql = "Update passengers SET PName = '{$PName}', PAge = '{$Age}', PEmail = '{$Email}', FDate = '{$Date}', PTicketNo = '{$Ticket}', PFlightNo = '{$FlightNo}',PFlightTime = '{$FlightTime}',PAirlines = '{$Airlines}',PDest = '{$To}' WHERE PName = '{$OriginalFlightNo}'";


		if(mysqli_query($link,$sql)){
	     	echo "<br/><h1>Update successful</h1>";
	 	}else{
         	echo "<br/><h1>Udpate failed</h1>";
	 	}
	 



?>

<!doctype html>
<html lang="">
	<head>
	</head>
	
	<body>
			<br/><br/>
			<b><a href="passengerstable.php"> Go back to Passengers Table</a></b>
	</body>

</html>