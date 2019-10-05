<?php 
    $servername = "localhost";
	$username="root";
	$password="";
	$dbname="try_db1";
	
	$uname=$_POST['uname'];
	$pwd=$_POST['pwd'];
	
	$conn = mysqli_connect($servername,$username,$password,$dbname);
    
    if ($conn)
	{
		echo "***** Connected *****";
	}
	else
	{
		echo "Error creating database: " .mysqli_error($conn);
	}
	
	$sql= "insert into staff (username,password) values ('$uname','$pwd')";
	
	$check=mysqli_query($conn, $sql);
	
	if($check)
	{
		echo " Staff Data Added ";
	}
	else
	{
		echo "Error creating database: " .mysqli_error($conn);
	}
?>