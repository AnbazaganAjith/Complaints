<?php
$con=mysqli_connect("localhost","root","","user");
//echo "Data base connceted";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Database</title>
</head>
<body> 
<form action="" method="POST">
	
<label>Enter the NO:</label>
<input type="text" name="txt">
<input type="submit" name="submit" value="submit">
</form>
<?php
if(isset($_POST["submit"]))
{
	$res= mysqli_query($con,"SELECT * FROM comp where no='$_POST[txt]'");
	while ($row=mysqli_fetch_array($res)) {
	$noc=$row[1];
  $rno=$row[2];
	$cate=$row[3];
	$gtype=$row[4];
	$date=$row[5];
	$depart=$row[6];
	$dis=$row[7];
	$ufile=$row[8];
  $act=$row[9];
 
	}
}
?>
      <tr>
      
        <td><?php echo "$id"; ?></td>
        <td><?php echo "$noc"; ?></td>
        <td><?php echo "$rno"; ?></td>
        <td><?php echo "$cate"; ?></td>
        <td><?php echo "$gtype"; ?></td>
        <td><?php echo "$date"; ?></td>
        <td><?php echo "$depart"; ?></td>
        <td><?php echo "$dis"; ?></td>
        <td><?php echo "$ufile"; ?></td>
        <td><?php echo "$act"; ?></td>
      </tr>
</body>
</html>