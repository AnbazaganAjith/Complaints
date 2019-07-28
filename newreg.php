<?php

  include("config.php");

?>


<!DOCTYPE html>
<html>
<head>
  <title>Newuser</title>
  <link rel="stylesheet" type="text/css" href="style.css">

   <div id="user_logn">
  <center>
  <br><br>
<fieldset id="logn" >
  <legend >SIGNUP</legend>
    <form method="post" action="newreg.php"  autocomplete="off">
      <table id="tbl" cellpadding="5">
        <tr>
          <td>User Name</td>
          <td ><input type="Text" placeholder="enter your name" class="new" name="uname" required></td>
        </tr>
        <tr>
          <td>RollNumber</td>
          <td><input type="text"  placeholder="enter your Roll_No" class="new" name="rollno" required></td>
        </tr>
        <tr>
          <td>Department</td>
          <td><select  class="new" name="depart" required>
              <option>Select your Department</option>
              <option>BA Tamil</option>
              <option>BA English</option>
              <option>B.sc(maths)</option>
              <option>B.sc(chemistry)</option>
              <option>B.sc(physics)</option>
              <option>B.sc(Microbiology)</option>
              <option>B.sc(Biotechnolgy)</option>
              <option>B.sc(Electranic Science)</option>
              <option>B.sc(Computer Science)</option>
              <option>B.sc(Software Computer Science)</option>
              <option>B.sc(Information Syatem Management)</option>
              <option>BCA</option>
              <option>BBA</option>
              <option>BCom</option>
              <option>BCom(CA)</option>
              <option>BCom(FA)</option>
              <option>MCA</option>
              <option>MCom</option>
              <option>Msc(cs)</option>
              <option>Msc(maths)</option>
          </select></td>
        </tr>
        <tr>
          <td>Email-ID</td>
          <td><input type="email"  placeholder="enter your email-id" class="new"  name="email" required></td>
        </tr>
        <tr>
          <td>PassWord</td>
          <td><input type="PassWord"  placeholder="enter your PassWord" class="new" name="pass1" required></td>
        </tr>
      <tr>
          <td>confirm Password</td>
          <td><input type="password"  placeholder="please confirm your password" class="new"  name="pass2" required></td>
        </tr>  </table>  
    <input type="submit" class="btn success" value="Submit" name="submit" >
      <input type="reset" class="btn danger" value="Cancel" >
     <a  href="login.php" >Alredy Registered..! </a>  
</form>  
     <?php
    if(isset($_POST["submit"]))
    {
      $uname=$_POST["uname"];
      $rollno=$_POST["rollno"];
      $depart=$_POST["depart"];
      $email=$_POST["email"];
      $pass1=$_POST["pass1"];
      $pass2=$_POST["pass2"];
        if($uname!==""&&$rollno!==""&&$depart!==""&&$email!==""&&$pass1!==""&&$pass2!="")
        {
          if($pass1==$pass2)
          {
            $sql="INSERT INTO `new`(`name`, `RollNO`, `depart`,`email`,`pass1`, `pass2`) VALUES ('$uname','$rollno','$depart','$email','$pass1','$pass2')";
              if($con->query($sql))
              {
              header("location:login.php?mes=<p class='crt'>You Are Registered Successfully ...Please Login Here..</p>");
              }
              else
              {
              echo"<p class='err'>Error....!Try Again Later..!</p>";
              }

          }
          else
          {
            echo"<p class='err1'>Confirm password must be same..?</p>";
          }

        } 
        else
        {
          
        }
    }
    
    ?>
    <?php
if(isset($_POST['email'])== true && empty($_POST['email'])== false)
{
  $email=$_POST['email'];
  if(filter_var($email,FILTER_VALIDATE_EMAIL)==true)
  {
    
  }else
    {
      echo 'invalid email...';
    }
}
?>
</fieldset></center>
</div>
</body>
</html>