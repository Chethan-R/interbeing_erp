<!DOCTYPE html>
<html>
<head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<title>Admin Home Page</title>
<link rel="stylesheet" href="style.css.css">
<style type="text/css" media="all">
        .btn-warning,.btn-danger{
					align:center;
					padding: 10px 20px;
                    font-size: 15px;
					border-radius: 10px;
					
		}
		.btn-default{
					align:center;
					padding: 15px 30px;
                    font-size: 20px;
					border-radius: 15px;
					
		}
</style>
</head>
<body>
	<div id="main-wrapper">
        
		<center><h2>Admin Home Page</h2></center>
		<center><h3>Welcome  Admin  </h3></center>
		
		
			<div class="imgcontainer">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTH_e_0K-4Bs5ID4sYwDc4Bi0Gs6_lXl-jvmh6Jcq5Mk1ZtUEd8YA&s" alt="Avatar" class="avatar">
			</div>
			<div>
			<form action="staffhomepage.php">
            <center><button type="submit" class="btn btn-warning"> STUDENT </button><br></center>
			</form>
			</div>
			<br>
			<form action="staffdetails.php">
            <center><button type="submit" class="btn btn-danger"> STAFF </button><br></center><br>
            </form>
			
			<form action="1st.html">
			<p align="center">
              <button type="submit" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-log-out"></span> LOG OUT </button>
            </p> 
			</form>
		
	</div>
</body>
</html>