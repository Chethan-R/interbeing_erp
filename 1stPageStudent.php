<?php 
    $servername = "localhost";
	$username="root";
	$password="";
	$dbname="try_db1";
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$ph1=$_POST['ph1'];
	$fname=$_POST['fname'];
	$ph2=$_POST['ph2'];
	$github=$_POST['github'];
	$fb=$_POST['fb'];
	$lin=$_POST['lin'];
	$yy=$_POST['10y'];
	$pp=$_POST['10p'];
	$yyy=$_POST['12y'];
	$ppp=$_POST['12p'];
	$strm=$_POST['12strm'];
	$deg=$_POST['deg'];
	$degstrm=$_POST['degstrm'];
	$dyop=$_POST['dyop'];
	$purpose=$_POST['purpose'];
	$howufind=$_POST['howufind'];

	
	
	$conn = mysqli_connect($servername,$username,$password,$dbname);
    
    if ($conn)
	{
		echo "***** Database Connected *****";
		
	}
	else
	{
		echo " Error creating database: " .mysqli_error($conn);
	}
	
	$sql= "insert into login1 (name,email,ph1,fname,ph2,github,fb,lin,yy,pp,yyy,ppp,strm,deg,degstrm,dyop,purpose,howufind) values ('$name','$email','$ph1','$fname','$ph2','$github','$fb','$lin','$yy','$pp','$yyy','$ppp','$strm','$deg','$degstrm','$dyop','$purpose','$howufind')";
	
	$check=mysqli_query($conn, $sql);
	
	if($check)
	{
		echo " Data Added ";
	}
	else
	{
		echo " Error creating database: " .mysqli_error($conn);
	}
?>