<form action="edit.php" method="post">
	ID &nbsp;<input type="text" name="id" value="<?php echo $_GET['id'] ?>"><br><br>

	Action: &nbsp;<select name="act"><option>Not Valuable</option>
       <option>In-Proceesing</option>
       <option>Closed</option></select><br><br>

	<input type="submit" name="btn" value="Update Data" ><br><br>
</form>
<?php

	if(isset($_POST['btn']))
	{
	$con=mysqli_connect("localhost","root","","user");
	$id=$_POST['id'];
	$act=$_POST['act']; 

	$qry="UPDATE `comp` SET `action`='".$act."' WHERE `no`=$id";
	$res=mysqli_query($con,$qry); 
	if($res)
	{
		echo 'Data Updated.....!';
	}else
	{
		echo " con't Updated..!";
	}
}
?>