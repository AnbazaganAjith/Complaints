<?php
$con=new mysqli("localhost","root","","user");
 if($con->connect_error)
 {
 	echo $con->connect_error;
 	die("sorry data base connection failed..!");
 }
//else
//{
	//echo "Data base connected";
//}
?>