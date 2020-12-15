<!DOCTYPE html>
<html>
<head>
  <style>
  h1,h2,tr{
      text-align: center;
  }
  body{
      background-color: #d8d8d8;
  }
  .center {
  margin-left: auto;
  margin-right: auto;
  }
  .btn {
  background-color:grey;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
  margin-left: 40%;
  text-align: center;
  }
  .btn:hover {
  opacity: 1;
  }
  </style>
 </head>
<body>
<?php
$username=$_POST['user'];
$password=$_POST['pass'];
if($username && $password)
{
error_reporting(0);
$conn = mysqli_connect('localhost','root','','timetable_project');
if($conn-> connect_error)
{
  die("connection failed  ".$conn-> connect_error);
}
$query="select count(F_id) as total from facultylogindetails where Username='$username' and Password='$password' ";
$result=mysqli_query($conn,$query);
$rows=mysqli_fetch_array($result);
$num_rows=$rows['total'];
if($num_rows!=0 && $username=='sowjanyaramishetty@kgr.ac.in' )
{
  $records2 = mysqli_query($conn,"select F_Name from facultylogindetails where Username='$username'"); // fetch data from database
while($data2 = mysqli_fetch_array($records2)){
  $facultyname=$data2['F_Name'];
}
  echo " <h1>login successful welcome    ".$facultyname."</h1> ";
  echo "<br>";
?>
<h2>CSE-3A Time-Table </h2>
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
$records1 = mysqli_query($conn,"select * from CSE3A"); // fetch data from database
while($data1 = mysqli_fetch_array($records1))
{
?>
  <tr>
    <td><?php echo $data1['S_No']; ?></td>
    <td><?php echo $data1['Day']; ?></td>
    <td><?php echo $data1['1st_hour']; ?></td>
    <td><?php echo $data1['2nd_hour']; ?></td>
    <td><?php echo $data1['Short_break']; ?></td>
    <td><?php echo $data1['3rd_hour']; ?></td>
    <td><?php echo $data1['4th_hour']; ?></td>
    <td><?php echo $data1['Lunch_break']; ?></td>
    <td><?php echo $data1['5th_hour']; ?></td>
    <td><?php echo $data1['6th_hour']; ?></td>
  </tr> 
<?php
}
?>
</table>
<br>
<br>
<form method="POST" action="update3_a.php"> 
<input type="submit" class="btn" value="Make Changes">
</form>
<h2>CSE-3B Time-Table </h2>
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
<form method="POST" action="update.php"> 
<input type="submit" class="btn" value="Make Changes">
</form>
<?php
}
elseif($num_rows!=0 && $username=='krkreddy@kgr.ac.in')
{
  $records2 = mysqli_query($conn,"select F_Name from facultylogindetails where Username='$username'"); // fetch data from database
while($data2 = mysqli_fetch_array($records2)){
  $facultyname=$data2['F_Name'];
}
  echo " <h1>login successful welcome    ".$facultyname."</h1> ";
  echo "<br>";
?>
<h2>CSE-3A Time-Table </h2>
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
$records1 = mysqli_query($conn,"select * from CSE3A"); // fetch data from database
while($data1 = mysqli_fetch_array($records1))
{
?>
  <tr>
    <td><?php echo $data1['S_No']; ?></td>
    <td><?php echo $data1['Day']; ?></td>
    <td><?php echo $data1['1st_hour']; ?></td>
    <td><?php echo $data1['2nd_hour']; ?></td>
    <td><?php echo $data1['Short_break']; ?></td>
    <td><?php echo $data1['3rd_hour']; ?></td>
    <td><?php echo $data1['4th_hour']; ?></td>
    <td><?php echo $data1['Lunch_break']; ?></td>
    <td><?php echo $data1['5th_hour']; ?></td>
    <td><?php echo $data1['6th_hour']; ?></td>
  </tr> 
<?php
}
?>
</table>
<br>
<br>
<form method="POST" action="update3_a.php"> 
<input type="submit" class="btn" value="Make Changes">
</form>
<h2>CSE-3B Time-Table </h2>
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
<form method="POST" action="update.php"> 
<input type="submit" class="btn" value="Make Changes">
</form>
</body>
<?php
}
else{
  echo "<strong>INVALID USERNAME OR PASSWORD</strong>";
}
}
else{
  echo "<strong>PLEASE ENTER ALL DETAILS DETAILS</strong>";
}
echo "<br>";
echo "<br>";
echo "<br>";
?>
</body>
</html>