<!DOCTYPE html>
<html>
    <head>
<title>Staff Update Page</title>
<link rel="stylesheet" href="style.css.css">
</head>
<body style="background-color:#bdc3c7">
    <div id="main-wrapper">

<center><h2>STAFF UPDATE</h2>
<table>
<form action="staffupdate.php" method="POST">
    <div class="inner_container">
	
    <tr><td><b>Staff Username:</b></td>
        <td> <input type="text" name="username" value=<?php echo $_GET['username'];?> ><br></td></tr>
  
    <tr><td><b>Staff Password:</b></td>
        <td> <input type="text" name="password" value=<?php echo $_GET['password'];?> ><br></td></tr>
		
    </div>
    <tr> <td><midle>  <input type="submit" value="UPDATE" class="submit_btn"></midle></td></tr>
    
    <td><a href="staffview.php"><button type="button" class="back_btn"> Back </button></a></td>
   
    </form>
</center>   
</body>
</html>