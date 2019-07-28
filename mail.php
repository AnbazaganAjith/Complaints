<!DOCTYPE html>
<html>
<head>
	<title>mailform</title>
</head>
<style type="text/css">
html
{
	font-family: arial;
}
	u{
		font-family: sans-serif;
		font-size:20px;
		color: red;
	}
</style>
<body>
<?php
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phno=$_POST['phno'];

		$to='ajithanbazagan2017@gmail.com';
		$subject='from Submittion';
		$message="Name :".$name."\n"."phone:".$phno."\n";
		$headers="From:".$email;

		if(mail($to, $subject, $message,$headers))
		{
			echo "mail Send Successfully...!"."<u>"." \t".$name."</u>".",we will contect you shortly...!";
		}
		else
		{
			echo "somting went error";
		}
	}
?>
<br><br><br><center>
<button type="button" onclick="javascript:window.close()" class="btn">OK</button></center>
</body>
</html>

