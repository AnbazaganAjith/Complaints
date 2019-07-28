<!DOCTYPE html>
<html>
<head>
  <title>Admin data</title>
</head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="admin.css">
<body>
<?php
          mysql_connect('localhost','root','');
      mysql_select_db('user');
      //echo"data base connected...";
      $sql="SELECT * from comp ";
      $records=mysql_query($sql);
    ?>    
    <div class="container" style="padding-left:10px">
  <h2> View Grivance </h2>
  <p>Student's Grivance Details</p>            
  <table class="table table-hover" style="width:auto">
    <thead>
      <tr>
        <th>Complaint No</th>
        <th>Nature of Grivace</th>
        <th>Categories</th>
        <th>Types</th>
        <th>DateOF Complaint</th>
        <th>Department</th>
        <th>Description</th>
        <th>uploads</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
 <?php
  while($user=mysql_fetch_assoc($records))
  {
    echo "<tr>";
    echo "<td>".$user['no']."</td>";
    echo "<td>".$user['nog']."</td>";
    echo "<td>".$user['cat']."</td>";
    echo "<td>".$user['type']."</td>";
    echo "<td>".$user['date']."</td>";
    echo "<td>".$user['dep']."</td>";
    echo "<td>".$user['des']."</td>";
    echo "<td>".$user['file']."</td>";
    echo "<td>".$user['action']."</td>";
     echo "<td><a href=\"del.php?id=".$user['no']."\"class='btn btn-danger'>Delete</a></td>";
  } echo "</tr>";
    
?>
    
      </tr>
      
      
    </tbody>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
       

  </table>
</div></div>
</body>
</html>