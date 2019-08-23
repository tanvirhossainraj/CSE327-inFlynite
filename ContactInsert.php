<?php

	include_once("Connection.php");
	 

	

	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
		$Name 	= $_POST['name'];
		$Email 	= $_POST['email'];
		$Message = $_POST['message'];



	 	$sql = "INSERT INTO `contact` (`Name`, `Email`, `Message`) VALUES ('".$Name."', '".$Email."', '".$Message."')";


	 	if(mysqli_query($link,$sql)){
	     	echo " Row Insertion Complete";
	 	}else{
         	echo " Row Insertion Failed";
	 	}
	}else{

		echo "You must fill mandatory fild.";
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
			<b><a href="index.php"> Go back to Home Page</a></b>
	</body>

</html>
