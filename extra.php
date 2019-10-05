<!DOCTYPE html>
<html>
 <head>
  <title>php1</title>
 </head>
 
 <body>
  
   <?php 
         
    if()
	{
		
	}
		
    $name=$_POST['name'];
	$email=$_POST['email'];
	$ph1=$_POST['ph1'];
	$fname=$_POST['fname'];
	$ph2=$_POST['ph2'];
	$github=$_POST['github'];
	$fb=$_POST['fb'];
	$lin=$_POST['lin'];
	$y10=$_POST['10y'];
	$p10=$_POST['10p'];
	$y12=$_POST['12y'];
	$p12=$_POST['12p'];
	$strm12=$_POST['12strm'];
	$deg=$_POST['deg'];
	$degstrm=$_POST['degstrm'];
	$dyop=$_POST['dyop'];
    
    @$db = new mysqli('localhost','root','','eg1');
    
    if(mysqli_connect_errno())
    {
       echo " <p>Error: Couldn't connect to db.</p> ";
       exit;
    }
    
    	