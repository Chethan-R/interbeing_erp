
<?php
	//require_once('dbconfig/config.php');
				
		echo $username=$_GET['username'];
				
                
				
					$query = "select * from `staff` where `username`='$username'";
                    $con=mysqli_connect("localhost","root","","try_db1");
                    $query_run = mysqli_query($con,$query);
                   
				
					
						if(mysqli_num_rows($query_run)>0)
						{
							$query = "DELETE FROM `staff` WHERE username='$username'";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("Staff Data Deleted.")</script>';
							}
							else
							{
								echo "Staff not deleted";
							}
						}
?>