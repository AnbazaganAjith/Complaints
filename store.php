<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		#prof
		{	margin-top:px;
			width:20%;
			height:600px;
			border-bottom: 700px;
			text-align: center;
			min-height: 0px;
			background-size:cover; 
			background-image: url(img/bg/prf.jpg);
   	 		color: white;
   	 		float: left;
		}
		#prof1
		{
			text-align: center;

		}
		table
		{
			text-align:left;
			margin-left: 25px;

		}
	#ser img
	{	
		
		margin-top: 100px;
		width:250px;
		height:180px;
		margin-left:5px;
		padding:5px;
	}
	#prof div div h2 {
	font-size: 10px;
}
    #prof div div h2 {
	font-size: 18px;
}
    #prof div div h2 {
	font-size: 18px;
	color: #FF0;
}
    </style>
    <script type="text/javascript">
    function popwin()
    {
      window.open("aser.php", "myWindow", "width=600,height=800");
    }

</script>
	<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
    </script>
    <script type="text/javascript">
    function popwin()
    {
      window.open("aser.php", "myWindow", "width=600,height=800");
    }

</script>
</head>

	<body onLoad="MM_preloadImages('img/serve/h1.jpg','img/serve/h2.jpg','img/serve/h3.jpg','img/serve/h4.jpg','img/serve/h5.jpg','img/serve/h6.jpg','img/serve/h7.jpg','img/serve/h8.jpg')" style="background-image:url(img/bg/comp.jpg);background-size:cover">
	<div  style="background-color: #eee; height:70px;padding-top:5px">
	<center>
	  <h2>Categrius Of Grievance</h2></center>
</div>

<div id="prof" >
	<div>
		<div >
			<?php
				if(isset($_GET['roll']))
					{
					$roll=$_GET['roll'];
					$pass=$_GET['pass'];
				 	$con=mysql_connect("localhost","root","")or die("could not connect");
					$db=mysql_select_db("user",$con) or die("Could not connect database");
					$qry=mysql_query("SELECT * FROM `new` WHERE RollNO='$roll'AND pass1='$pass'") or die("plz check the query");
				if(mysql_num_rows($qry)!=1)
					{
			
						header("location:login.php?mes=<p class='crt'>.That Rollno is not be found or wrong pssword <br> Plz Login Here..</p>");

					}
				while ($row=mysql_fetch_array($qry))
					 {
						$name=$row[0];
						$Depart=$row[2];
						$email=$row[3];
					}

			?>
<?php
		}
		else 
			{
			header("location:login.php?mes=<p class='crt'>.Plz Login Here..</p>");
			
		}
?>
			<br><br><br>
			<h2><?php echo $roll?>'s profile</h2><br></div>
				<table >
				<div>
					<img src="img/prf.png" width="100px" height="70px"><br><br>
					<tr><td>Name :</td><td><?php echo $name ?></td></tr>
					<tr><td>Department :</td><td><?php echo $Depart ?></td></tr>
					<tr><td>email :</td><td><?php echo $email ?></td></tr>
				</table><br>
				<button type="button" class="btn btn-warning"><a href="comp.php?rn=<?php echo $roll ?>" style="text-decoration: none; color: white;" > Make Complaint</a></button><br><br>
				 <button type="button" class="btn btn-info"><a   href="aser.php?rn=<?php echo $roll ?>" style="text-decoration: none; color: white; ">Status Of Complaint</a></button><br><br>
				<button type="button" class="btn btn-danger"><a href="logout.php" style="text-decoration: none; color: white;">Logout</a></button>
				</table>
				</div>
</div></div></div>



<div class="col-sm-4">
<div id="ser">
<table>
	<tr>
		<TD><a href="srve.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image2','','img/serve/h1.jpg',1)"><img src="img/serve/1.jpg" name="Image2" width="1200" height="800" border="0"></a></TD>
		<TD><a href="fn.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image3','','img/serve/h2.jpg',1)"><img src="img/serve/2.jpg" name="Image3" width="278" height="182" border="0"></a></TD>
		<TD><a href="lib.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image4','','img/serve/h3.jpg',1)"><img src="img/serve/3.jpg" name="Image4" width="600" height="387" border="0"></a></TD>
		<td><a href="bus.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image5','','img/serve/h4.jpg',1)"><img src="img/serve/4.jpg" name="Image5" width="800" height="532" border="0"></a></td>
	</tr>
	<tr>
		<td><a href="exm.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image6','','img/serve/h5.jpg',1)"><img src="img/serve/5.jpg" name="Image6" width="1200" height="450" border="0"></a></td>
		<td><a href="placement.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image7','','img/serve/h6.jpg',1)"><img src="img/serve/6.jpg" name="Image7" width="273" height="185" border="0"></a></td>
		<td><a href="lab.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image8','','img/serve/h7.jpg',1)"><img src="img/serve/7.jpg" name="Image8" width="800" height="532" border="0"></a></td>
		<td><a href="can.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image9','','img/serve/h8.jpg',1)"><img src="img/serve/9.jpg" name="Image9" width="342" height="266" border="0"></a></td>
	</tr>
</table>	
</div></div>
 </body>
</html>
