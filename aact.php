<?php
include("config.php")
?>


<!DOCTYPE html>
<html>
<head>
	<title>Get-Action</title>
</head>
<body>
<form action="aact.php" method="post">
	<table>
	<tr>
		<td><label>Enter the complaint no</label></td>
		<td><input type="text" name="cno" name="cn"></td>
	</tr>

</table>
	<input type="submit" name="submit">
</form>
<?php
if(isset($_POST["submit"]))
{
$res=mysqli_query("SELECT * FROM `comp` WHERE no='$_POST[cn]' ");
while ($row=mysqli_fetch_assoc($res)) 
 {
 	$id=$row['no'];
	$noc=$row['nog'];
	$rno=$row['rno'];
	$cate=$row['cat'];
	$gtype=$row['type'];
	$date=$row['date'];
	$depart=$row['dep'];
	$dis=$row['des'];
	$ufile=$row['file'];
  $act=$row['action'];
 
 }
?>

	<table >
					
       <tr><td>Yours Complaint No:</td> <td><?php echo "$id"; ?></td></tr>
       <tr> <td>Name:</td> <td><?php echo "$noc"; ?></td></tr>
       <tr> <td>RollNO:</td> <td><?php echo "$rno"; ?></td></tr>
       <tr> <td>Categories of grivance:</td> <td><?php echo "$cate"; ?></td></tr>
       <tr> <td>Type of complaint:</td><td><?php echo "$gtype"; ?></td></tr>
       <tr> <td>Date of complaint:</td><td><?php echo "$date"; ?></td></tr>
       <tr> <td>Department:</td><td><?php echo "$depart"; ?></td></tr>
       <tr> <td>Description:</td><td><?php echo "$dis"; ?></td></tr>
       <tr> <td>File Uploads:</td><td><?php echo "$ufile"; ?></td></tr>
       <tr> <td>Action:</td><td><select><option>Not Valuable</option>
       <option>In-Proceesing</option>
       <option>Closed</option></select></td>
      </tr>
	</table>
</body>
</html>