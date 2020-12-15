<?php
$branch=$_POST['branch'];
$year=$_POST['year'];
$section=$_POST['section'];
if($branch && $year && $section){
error_reporting(0);
$conn = mysqli_connect('localhost','root','','timetable_project');
if($conn-> connect_error)
{
  die("connection failed  ".$conn-> connect_error);
}
$tablename=$branch.$year.$section;
?>
<h2><?php echo $tablename ?> Time-Table </h2>
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
$records = mysqli_query($conn,"select * from $tablename "); // fetch data from database
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
<?php
}
else{
	echo "please enter all details";
}

?>