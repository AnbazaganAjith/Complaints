
<!DOCTYPE html>
<html>
<head>
    <title>Complaint Port</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<center>
<div style="background: #24478f ;height:120px; padding:5px;" >
<center><h2 style="color:white">Complaint and Grivance Section </h2>
<p style="color:#ffffb3">Shanmuga Industries Arts ans Science College.<br>Tiruvannamalai.
</p></center></div>


</div>

<div style="margin: 50px">
        <form action="data.php" method="post">
            <table >
               <tr><td><h4></td></h4><td><input type="hidden" name="id" class="form-control" placeholder="You must to Post This"></td>
                <tr><td><h4>Name of the Student</h4></td><td><input type="text" name="nog" placeholder="Student Name.." value="<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("user",$con);

?>

<?php
$sql="SELECT * FROM `new` where `RollNO`='$_GET[rn]'";
$qry=mysql_query($sql);
while ($row=mysql_fetch_assoc($qry))  
 {
  $name=$row['name'];
  $dep=$row['depart'];
  echo $name;
 }  

?> 
 " class="form-control" required ></td></tr>
                 <tr><td><h4>Student's RollNumber</h4></td><td><input type="text" name="rno" placeholder="Student RollNO.." value="<?php echo $_GET['rn']; ?>" class="form-control" required ></td></tr>
                <tr><td><h4>Categories</td></h4><td><select class="form-control" name="cat" required>
                <option value="" selected>select Categories of Grivance</option>
                <option>Acadamic(features)</option>
                <option>Accounts& Billing</option>
                <option>Exam cell</option>
                <option>Laboratory</option>
                <option>Library</option>
                <option>Trainig & Placement cell</option>
                <option>Canteen</option>
                 <option>Hostel</option>
                <option>Transport</option>
                <option>Others</option>
                </select></td></tr>
               
                <tr><td><h4>Types </h4></td> <td><select  name="type" class="form-control" required>
                <option value="" selected>select Type of complaint..</option>
              <option>Complaint</option>
              <option>Grivance</option>
              <option>Redrassal idea.!</option></select></td></tr>
              <tr><td><h4>Date of complaint</td></h4><td><input type="Date" class="form-control" name="date" required></td>
                <tr><td><h4>Department</h4></td> <td><select   name="depart" class="form-control" required >
                <option value="" selected>select your Department..</option>
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
          </select></td></tr>
          <tr><td><h4>Description of Grivance</h4></td><td>  <textarea id="subject" name="subject" placeholder="Write something about your grivance in 200 words" style="height:200px" class="form-control" required></textarea></td></tr>
          <tr><td><h4>Complaint upload</h4></td><td><input type="file"  class="form-control" name="file" placeholder="user_defind"></td></tr>
          <tr><td><h4></h4></td><td><input type="text" name="act" value="NotYet" hidden>
            </table>   <br><br>
            <input type="submit" class="btn btn-info" value="Submit">
            <button type="button" class="btn btn-warning"><a href="store.php" style="text-decoration: none; color: white;" >Cancel</a></button>
            <button type="button" class="btn btn-danger"><a href="logout.php" style="text-decoration: none; color: white;" > logout</a></button></div>
        </form><br>
        <div style="padding:10px; margin-left: 20%;"> 
</div></center>
</body>
</html>


