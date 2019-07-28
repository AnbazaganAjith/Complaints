<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<script language="javascript">
function pasuser(form)
 {
  if (form.id.value=="admin")
    { 
     if (form.pass.value=="admin")
      {              
        location="adm.php" 
      } 
      else
       {
        alert("Invalid Password")
       }
    } 
  else
    { 
     alert("Invalid UserID")
    }
  }
</script>

<body style="background-image: url(img/bg/2.jpg);background-size: cover;margin-top: 150px;">
  <center>
  <img src="img/admin.png" width="150px" height="120px">
  <fieldset style="width:500px;height: 250px;">
  <legend style="color: white;font-size: 24px" >Admin_Login</legend>
    <table cellpadding="12">
      <tr><td><b>Admin_ID:</b></td><td>
      <form name="login" autocomplete="off">
        <input name="id" type="text" class="id"></td></tr>
          <tr><td><b>Password:</b></td><td>
          <input name="pass" type="password" class="pwd"></td></tr>
          <tr><td>
            <center><input type="button" value="Login" onClick="pasuser(this.form)" class="btn success"></center></td>
          <td><center><input type="Reset" class="btn danger"></center></td>
      </form>
      </td></tr>
    </table></fieldset>
  </center> 
</body>
</html>