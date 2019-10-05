<?php
$con=mysqli_connect("localhost","root","","try_db1");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM login1");

echo "<table border='1'>
<tr>
<th>Name</th>
<th>Email</th>
<th>Student Phone</th>
<th>Father</th>
<th>Father Name</th>
<th>Github</th>
<th>Facebook</th>
<th>Linked in</th>
<th>10th YOP</th>
<th>10th %</th>
<th>12th YOP</th>
<th>12th %</th>
<th>12th Stream</th>
<th>Degree</th>
<th>Degree Stream</th>
<th>Degree YOP</th>
<th>Purpose</th>
<th>howufind</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>
<td>" . $row['name'] . "</td>
<td>" . $row['email'] . "</td>
<td>" . $row['ph1'] . "</td>
<td>" . $row['fname'] . "</td>
<td>" . $row['ph2'] . "</td>
<td>" . $row['github'] . "</td>
<td>" . $row['fb'] . "</td>
<td>" . $row['lin'] . "</td>
<td>" . $row['yy'] . "</td>
<td>" . $row['pp'] . "</td>
<td>" . $row['yyy'] . "</td>
<td>" . $row['ppp'] . "</td>
<td>" . $row['strm'] . "</td>
<td>" . $row['deg'] . "</td>
<td>" . $row['degstrm'] . "</td>
<td>" . $row['dyop'] . "</td>
<td>" . $row['purpose'] . "</td>
<td>" . $row['howufind'] . "</td>
<td><a href='studentupdate.php?name=$row[name]&email=$row[email]&ph1=$row[ph1]&fname=$row[fname]&ph2=$row[ph2]&github=$row[github]&fb=$row[fb]&lin= $row[lin] &yy=$row[yy]& pp=$row[pp]& yyy=$row[yyy] & strm=$row[strm] & deg=$row[deg] & degstrm=$row[degstrm] & dyop=$row[dyop] & purpose=$row[purpose] & howufind=$row[howufind]'>UPDATE</a></td>

<td><a href='studentdelete.php?email=$row[email]'>DELETE</a></td>
</tr>";
}


mysqli_close($con);
?>
<a href="staffhomepage.php"><button type="button" class="back_btn"> Back </button></a><br><br>