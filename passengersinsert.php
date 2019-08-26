<?php 

	include_once("Connection.php");
	
	 
     
	

	if(isset($_POST['pname']) && isset($_POST['page']) && isset($_POST['pemail']) && isset($_POST['pdate']) && isset($_POST['pticket']) && isset($_POST['pflight']) && isset($_POST['pflighttime']) && isset($_POST['pairlines']) && isset($_POST['pto'])){
		$Fno 	= $_POST['pname'];
		$Dest = $_POST['page'];
        $fGate = $_POST['pemail'];
		$fdt = $_POST['pdate'];
        $fStatus = $_POST['pticket'];
        $fflight = $_POST['pflight'];
        $fflightime = $_POST['pflighttime'];
        $fair = $_POST['pairlines'];
		$fto = $_POST['pto'];
		
		
	 	$sql = "INSERT INTO `passengers` (`PName`, `PAge`,`PEmail`,`FDate`,`PTicketNo`,`PFlightNo`,`PFlightTime`,`PAirlines`,`PDest`) VALUES ('".$Fno."', '".$Dest."','".$fGate."','".$fdt."','".$fStatus."','".$fflight."','".$fflightime."','".$fair."','".$fto."')";


		if(mysqli_query($link,$sql)){
	     	echo " Row Insertion Complete";
	 	}else{
         	echo " Row Insertion Failed";
	 	}
	}else{
		
	
		

		echo "You must fill mandatory field.";
		/*if(empty($_POST['fname'])){
			echo "You must fill Name fild";
		}else if(empty($_POST['lname'])){
			
		}*/
		
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