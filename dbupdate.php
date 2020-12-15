<?php
$Day=$_POST['Day'];
$a =$_POST['N']; 
$Subject=$_POST['Subject'];
if($Subject && $Day && $a)
{
error_reporting(0);
$conn = mysqli_connect('localhost','root','','timetable_project');
if($conn-> connect_error)
{
  die("connection failed  ".$conn-> connect_error);
}
$b = '_hour'; 
// Concatenation Of String 
$c = $a.$b; 
$sql = "UPDATE CSE3B SET  $c='$Subject'  WHERE Day='$Day' ";
if ($conn->query($sql) === TRUE) {
  echo "<h2><u>Timetable Updated Successfully</u> </h2>";
} else {
  echo "Error updating record: " . $conn->error;
}
}
else{
	echo "please enter all details";
}
?>
<html>
<head>
<style>
h2{
  	margin-top: 40px;
  	text-align: center;
 }
.center {
    margin-left: auto;
    margin-right: auto;
}
.logout{
  text-align: center;
  font-size: 25px;
}
body{
  	background-color: #d8d8d8;
}
</style>
</head>
<body>
<h2><u>CSE-3B Time-Table</u></h2>
<br>
<table border="2" class="center">
  <tr >
  <td>S_No</td>
  <td>Day</td>
  <td>1st_hour</td>
  <td>2nd_hour</td>
  <td>Short_break</td>
  <td>3rd_hour</td>
  <td>4th_hour</td>
  <td>Lunch_break</td>
  <td>5th_hour</td>
  <td>6th_hour</td>
  </tr>
<?php
$records = mysqli_query($conn,"select * from CSE3B"); // fetch data from database
while($data = mysqli_fetch_array($records))
{
?>
<tr>
<td><?php echo $data['S_No']; ?></td>
<td><?php echo $data['Day']; ?></td>
<td><?php echo $data['1st_hour']; ?></td>
<td><?php echo $data['2nd_hour']; ?></td>
<td><?php echo $data['Short_break']; ?></td>
<td><?php echo $data['3rd_hour']; ?></td>
<td><?php echo $data['4th_hour']; ?></td>
<td><?php echo $data['Lunch_break']; ?></td>
<td><?php echo $data['5th_hour']; ?></td>
<td><?php echo $data['6th_hour']; ?></td>
</tr>	
<?php
}
?>
</table>
<br>
<br>
<div class="logout">
  <?php
  session_start();
session_destroy();
echo " <a href='index.html'>Logout</a>";
?>
</div>
</body>
</html>