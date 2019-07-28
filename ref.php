<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("samp",$con);
?>

<?php
$name=$_POST['name'];
$mail=$_POST['mail'];
$phno=$_POST['phno'];

$sql="INSERT into aji values('$name','$mail','$phno')";
$qry=mysql_query($sql);

if(!$qry){
	echo mysql_error();
		}	
else
{
	//echo "data stored sucees fully...!";
}

?>

<?php
$sql="SELECT * FROM aji";
$qry=mysql_query($sql);
	
	while ($row=mysql_fetch_assoc($qry)) {
	  	$name=$row['name'];
  		$mail=$row['email'];
  		$ph=$row['phno'];
	}

?>
<table>
	<tr>
		<td><?php echo "$name"; ?></td></tr>
		<tr><td><?php echo "$mail"; ?></td></tr>
		<tr><td><?php echo "$ph"; ?></td></tr>
	</tr>
</table>