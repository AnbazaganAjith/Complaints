<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
</head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style type="text/css">
html
{	
	
	font-family: sans-serif;
	margin-top: 75px;
	margin-left: 300px;
	margin-right:394px;
	

}
#my{


}
	#con
	{

		width: 400px;
		padding: 20px;
		border-color:  #66CCFF;

	}

</style>

<body>
	<div id="my">
	<table border-left="color:#66CCFF"><tr><td>
<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("user",$con);

?>

<?php
$sql="SELECT * FROM comp where no='$_GET[id]'" ;
$qry=mysql_query($sql);
while ($row=mysql_fetch_assoc($qry)) 
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
<div style="background-color:#006699; height: 35px; width:400px;color: white; "><center><h2>Admin-Action</h2></center></div>
<div id="con"> 
<form method="post" action="detail.php">
	<table >
					
       <tr><td>Yours Complaint No:</td> <td><?php echo $_GET['id']; ?></td></tr>
       <tr> <td>Name:</td> <td><?php echo "$noc"; ?></td></tr>
       <tr> <td>RollNO:</td> <td><?php echo "$rno"; ?></td></tr>
       <tr> <td>Categories of grivance:</td> <td><?php echo "$cate"; ?></td></tr>
       <tr> <td>Type of complaint:</td><td><?php echo "$gtype"; ?></td></tr>
       <tr> <td>Date of complaint:</td><td><?php echo "$date"; ?></td></tr>
       <tr> <td>Department:</td><td><?php echo "$depart"; ?></td></tr>
       <tr> <td>Description:</td><td><?php echo "$dis"; ?></td></tr>
       <tr> <td>File Uploads:</td><td><?php echo "$ufile"; ?></td></tr>
       <tr> <td>Action</td><td><?php echo "$act"; ?></td></tr>
       <tr></tr><tr></tr>       
	</table></form><br>
	
</div>

<div id="con">
<form action="detail.php" method="post">
	<input type="text" name="id" value="<?php echo $_GET['id'] ?>" hidden><br><br>

	Action: &nbsp;<select name="act"><option>Not Valuable</option>
       <option>In-Processing</option>
       <option>Closed</option></select>

	<input type="submit" name="btn" value="Update Data" ><br><br>
</form></div>
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
	 header("Location:ahm.php");

  echo '<script language="javascript">';
  echo 'alery(message successfully sent)';  //not showing an alert box.
  echo '</script>';
	}else
	{
		echo " con't Updated..!";
	}
}
?>
</td></tr></table>
</div>
</body></html>