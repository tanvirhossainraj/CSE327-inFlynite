<?php 

	include_once("Connection.php");
	
		$pas = $_POST['passenger'];
		
		echo $pas;
		
	 	$sql = "delete from passengers where PName='{$pas}'";


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
			<b><a href="passengerstable.php"> Go back to Flight Chart</a></b>
	</body>

</html>
