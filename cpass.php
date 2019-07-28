<?php
$name=$_POST['name'];
$mail=$_POST['mail'];
echo $name; 
echo $mail;

$con=mysql_connect("localhost","root","","user");
 $sql="SELECT * FROM new where name='$name'" ;
 $records=mysql_query($sql);

while($row=mysql_fetch_assoc($records))
 {
 	$nm=$row[0];
 	$dp=$row[2];

 	echo $nm;
 	echo $dp;
 } 	

?>