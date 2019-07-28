<!DOCTYPE html>
<html>
<head>
   <title>Girevance</title>
   <style type="text/css">
      #top
      {
         width:100%;
      }
      #lft
      {
         float:left;
         width: 20%
      }
      #con
      {
         float: right;
         width: 80%;
         margin-left: 10px;
      }
   </style>
</head>
<body>
   <div id="top">
      hiuuyti7iyit76r76r76r87rt8y6fyuf67tyf76fuhvhgvghftyfyufugf7tfuyvytf76fygtctyfdcytc7tfduytfc

   
             <div id="lft">
               <?php
            if(isset($_GET['roll']))
               {
               $roll=$_GET['roll'];
               $pass=$_GET['pass'];
               $con=mysql_connect("localhost","root","")or die("culd not connect");
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
            </div>

            <div style="" id="con">
                     The thumbnail of the template will take you to a full page using that template. You can download the Personal Web Package from the individual page or from this page. There are also instructions for importing the fwp (file extension used for the personal web package) file into a new website. A Personal Web Package is a way in which Expression Web will package up all of the files/folders for a website into a package that can then be imported into a new website or existing website. Don't have Expression Web? Download a free copy.
            </div>
   </div>
</body>
</html>