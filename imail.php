<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("user",$con);

?>


<?php
$sql="SELECT * FROM  `comp` ";

$qry=mysql_query($sql);


while ($row=mysql_fetch_assoc($qry)) 
 {
 	$id=$row['no'];
	$noc=$row['nog'];
	$rno=$row['rno']; 
 }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin-Mail</title>
</head>
<style type="text/css">
	body
	{
		color: white;
		font-family: Arial;
	}
	td input{
		padding:5px;
		border-radius: 5px;
		color:#666666;

	}
	.btn
	{
		background-color: #00b33c;
		width:100px;
		height: 35px;
		border-radius: 3px;
	}
		.btn:hover
	{
		background-color:#006622;
		width:100px;
		height: 35px;
		border-radius: 3px;
		color: white;
	}
</style>
<body bgcolor="#003d66" >
<center><br><br><br>
	<h4>   <?php echo  "$rno"; ?> </h4>
	<form action="mail.php" method="post" name="form" autocomplete="off">
	<table>
		<tr><td>Yours Complaint No:</td> <td><input type="value"  value="<?php echo "$id"; ?>" ></td></tr>
       <tr> <td>Name:</td> <td><input type="text" name="name" value="<?php echo "$noc"; ?>" ></td></tr>
		<tr><td><label for="email" autocomplete="off">emailid</label></td>
		<td><input type="text" name="email" required ></td></tr>
		<tr><td><label for="phno" autofill="off">Phone NO</label></td>
		<td><input type="text" name="phno" required></td></tr>
	</table>
	<input type="submit" name="submit" value="Send" class="btn">
	</form>
</center>
</body>
</html>