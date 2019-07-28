
<!DOCTYPE html>
<html>
<head>

  <title>Grievance_Details</title>
</head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="admin.css">
<script type="text/javascript">
    function popwin()
    {
      window.open("detail.php", "myWindow", "width=300,height=400");
    }

</script>
<body>
   <div id="header" style="background-color:#FFDE00;color: #006680;font-size:18px;" ><p style="float :left;padding-right:20px;padding-left:550px;margin-top:25px;">Shanmuga Industries Arts & Science College - Admin</p>
       <img src="img\adm.png" width="60px;" style="margin-top: 5px;"> 
   </div>
    <div id="cont" >
      <div id="left" style="background-color:#006699;">
      <div style="background-color:#006680;padding:16px;font-family:arial;color: white;margin-top:0px; text-align: center;">
      <b><label>Mange Complaints</label></b>
       </div>
        <ul><li><a href="ncomp.php">New Complaints</li></a>
        <li><a href="bcomp.php">Bending Complaints</li></a>
        <li><a href="ccomp.php">Closed Complaints</li></a>
        <li><a href="ucomp.php">complaints Details</li></a>
                <li><a href="adm.php">Back to home</li></a>
        <li><a href="index.php">Logout</li></a></ul>
      </div>
      <iframe src="adata.php" width="1098px" height="100%"></iframe>
		</div></div>
</body>
</html>