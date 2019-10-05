
<?php
	//require_once('dbconfig/config.php');
				
		echo $email=$_GET['email'];
				
                
				
					$query = "select * from `login1` where `email`='$email'";
                    $con=mysqli_connect("localhost","root","","try_db1");
                    $query_run = mysqli_query($con,$query);
                   
				
					
						if(mysqli_num_rows($query_run)>0)
						{
							$query = "DELETE FROM `login1` WHERE email='$email'";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("Student Data Deleted.")</script>';
							}
							else
							{
								echo "Student not deleted";
							}
						}
					
				
				
		?>