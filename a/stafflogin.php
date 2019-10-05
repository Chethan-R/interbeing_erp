<!DOCTYPE html>
<html>
<head>
<title>Staff Login Page</title>
<link rel="stylesheet" href="style.css.css">
</head>
<body style="background-color:#bdc3c7">
	<div id="main-wrapper">
	<center><h2>Staff Login Form</h2></center>
			<div class="imgcontainer">
                <img src="avatar.png" class="avatar"/>
			</div>
		<form action="stafflogin.php" method="post">
		
			<div class="inner_container">
				<midle><label><b>Staff Username</b></label><br>
                    <input type="text" placeholder="Enter Username" name="username" required></midle><br><br>
				<label><b>Staff Password</b></label><br>
                    <input type="password" placeholder="Enter Password" name="password" required><br><br>
				<center><button class="login_button" name="login" type="submit">LOGIN</button><br>
                </center>
			</div>
		</form>
		
		<?php
			if(isset($_POST['login']))
			{
				@$username=$_POST['username'];
				@$password=$_POST['password'];
                $con=mysqli_connect("localhost","root","","try_db1");
				$query = "select * from staff where username='$username' and password='$password' ";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array ($query_run,MYSQLI_ASSOC);
					
					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;
					
					header( "Location: staffhomepage.php");
					}
					else
					{
						echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
				}
			}
			else
			{
			}
		?>
		
	</div>
</body>
</html>