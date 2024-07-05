<?php
include("connect_examspace.php");
 error_reporting(0);
$i=$_GET['id'];
$query="DELETE FROM contact WHERE id='$i'";
$data=mysqli_query($con,$query);
if($data)
{
 header("Location:contact.php");
}
else{
 echo"fail";
}
?>