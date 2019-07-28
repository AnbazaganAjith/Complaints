<?php
$con=mysqli_connect("localhost","root","","aji");
echo "Data base connected";

?>
<?php
if(isset($_GET['edit']))
{
	$id=$_GET['edit'];
	$res=mysqli_query("SELECT * FROM ")
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Admin_Action
	</title>
</head>
<body>
<form action="" method="post">	
<input type="text" name="act"><br>
<input type="submit" value="update">
</form>
</body>
</html>