
<?php
	session_start();
  include("config.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="user_log">
	<center>
	<br><br>
	
	<?php
		if(isset($_GET["mes"]))
		echo $_GET["mes"];
	?>
	
<fieldset id="log" >
  <legend >LOGIN</legend>
    <form method="GET" action="store.php"  autocomplete="off" >
      <table id="tbl" cellpadding="5" cellspacing="20">
        <tr>
          <td>RollNumber</td>
          <td ><input type="Text" placeholder="enter your RollNumber" class="new" name="roll" required></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="Password" placeholder="enter your password" class="new" name="pass" required></td>
        </tr>
      </table>
        <input type="submit" class="btn info" value="Submit" name="submit" required>
       <input type="reset" class="btn danger" value="Reset" ><br><br>
        <a  href="newreg.php">New User Registration </a>
       
    </form>
</fieldset></center>

<?php
	if(isset($_POST["submit"])) 
	{
		$roll=$_POST["roll"];
		$email=$_POST["email"];
		if($roll!=""&&$pass!="")
		{
			$sql="SELECT `RollNO`,`` FROM `new` WHERE RollNO='$roll' AND pass1='$pass'";
			$result=$con->query($sql);
			//print_r($result);
			if($result->num_rows==1)
			{   session_start();
				$_SESSION["roll"]=$roll;
				$_SESSION["pass"]=$pass;
				header("location:store.php");
				header("location:comp.php");
				
			}
			else
			{
		echo "<center><p class='err'>Invalid Rollno or Password</p></center>";
					
			}
		}
		echo "<center><p class='err1'>Please Enter the Correct details</p></center>";

	}
	else 
	{
	echo"<center><p class='crt'>Please fill the details for complite Access </p></center>";
	}
?>

</body>
</html>