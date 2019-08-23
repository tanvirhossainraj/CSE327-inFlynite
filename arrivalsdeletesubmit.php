<?php 

	include_once("Connection.php");
	
	 
		//For grabbing the exact flight to delete
		
		$OriginalFlightNo = $_POST['originalFlight'];
		
		
	 	$sql = "Delete FROM flights WHERE Flight_No = '{$OriginalFlightNo}'";


		if(mysqli_query($link,$sql)){
	     	echo "<br/><h1>Delete successful</h1>";
	 	}else{
         	echo "<br/><h1>Delete failed</h1>";
	 	}
	 



?>

<!doctype html>
<html lang="">
	<head>
	</head>
	
	<body>
			<br/><br/>
			<b><a href="showtable.php"> Go back to Flight Chart</a></b>
	</body>

</html>
