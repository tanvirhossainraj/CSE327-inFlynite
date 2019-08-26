<?php 

	include_once("Connection.php");
	
	 
     
	

	if(isset($_POST['ename']) && isset($_POST['econt']) && isset($_POST['eaddress']) && isset($_POST['eairlines'])){
		$Fno 	= $_POST['ename'];
		$Dest = $_POST['econt'];
        $fGate = $_POST['eaddress'];
        $fStatus = $_POST['eairlines'];
		
		
	 	$sql = "INSERT INTO `employee` (`employee_name`, `employee_contact`,`employee_address`,`employee_airlines`) VALUES ('".$Fno."', '".$Dest."','".$fGate."','".$fStatus."')";


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
			<b><a href="employeestable.php"> Go back to Employees Table</a></b>
	</body>

</html>