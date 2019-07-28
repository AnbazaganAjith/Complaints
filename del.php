<?php
if($_GET['id'])
{
 $id=$_GET['id'];
 $con=mysqli_connect("localhost","root","","user");
$del="DELETE FROM comp where no='$id'";
mysqli_query($con,$del);
header("location:acdata.php");
}
?>
<script type="text/javascript">
	alert('Data Deleted...!');
</script>
