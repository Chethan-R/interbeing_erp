<?php
$con=mysqli_connect("localhost","root","","try_db1");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM staff");

echo "<table border='1'>
<tr>
<th>Username</th>
<th>Password</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>
<td>" . $row['username'] . "</td>
<td>" . $row['password'] . "</td>
<td><a href='staffupdate.php?username=$row[username] & password=$row[password]'>UPDATE</a></td>

<td><a href='staffdelete.php?username=$row[username]'>DELETE</a></td>
</tr>";
}

mysqli_close($con);
?>
<a href="staffdetails.php"><button type="button" class="back_btn"> Back </button></a><br><br>