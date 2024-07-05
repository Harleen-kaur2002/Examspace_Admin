<?php
include("connect_examspace.php");
error_reporting(0);
$i=$_GET['id'];
$query="DELETE FROM assignments WHERE id='$i'";
$data=mysqli_query($con,$query);
if($data)
{
 header("Location:all_assignment.php");
}
else{
 echo"fail";
}
?>