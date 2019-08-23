<!doctype html>
<html>
<head>
    
</head>
<body style="background-color: #f4f4f4;background-image:url(../CSE327ClassProject/images/bg1.png); background-size: cover;">
    
            <div class="container" style="box-shadow: 0 12px 16px 0 rgba(0.20,0.20,0.25,0.24);background-color:#ef494d;border: 5px solid #ef494d;margin-left:650px;margin-right:1100px;width: 650px;height:650px;margin-top:70px;">
                <div class="imgcontainer" style="background-color:white;">
							  <img src="images/img_avatar3.png" alt="Avatar" class="avatar" height="150" width="150" style="margin-left:250px;margin-top:30px;padding-bottom:50px;">
		</div>
		 <form action="loginfunc.php" method="POST">
			<div class="container" style="margin-top: 100px;margin-left:130px;">
				<label for="uname" style="font-size:25px;font-family: Verdana;color: white;">Username: &nbsp;</label>
				<input type="text" name="username" placeholder="Enter Username" style="width:50%;padding:10px;border:2px solid #ef494d;" required="">
				<br>
				<br>
				<label for="psw" style="font-size:25px;font-family: Verdana;color: white;">Password: &nbsp;&nbsp;</label>
				<input type="password" name="password" placeholder="Enter Password" style="width:50%;padding:10px;border:2px solid #ef494d;" required="">
				<br><br>
				<label style="color:white;font-family: Verdana;">
					<input style="color:white;" type="checkbox" checked="checked" name="remember"> Remember me
				</label>
			</div>
			<br>
			<br>
			<button type="submit" class="submitbtn" style="font-family: Verdana;box-shadow: 0 12px 16px 0 rgba(0.20,0.20,0.25,0.24), 0 17px 50px 0 rgba(0,0.20,0,0.19);padding:18px;margin-left:130px;background-color:white;border: 2px solid white;color:#ef494d;border-radius:10px;">Log In</button>		
			<a href="index.php" style="font-family: Verdana;box-shadow: 0 12px 16px 0 rgba(0.20,0.20,0.25,0.24), 0 17px 50px 0 rgba(0,0.20,0,0.19);padding:18px;margin-left:250px;background-color:white;border: 2px solid white;color:#ef494d;border-radius:10px;text-decoration:none;">Back</a>		
		</form>
             </div>
</body>
</html>
