<?php
include("connect_examspace.php");
error_reporting(0);
$i=$_GET['id'];
$query="DELETE FROM questions WHERE id='$i'";
$data=mysqli_query($con,$query);
if($data)
{
 header("Location:all_questions.php");
}
else{
 echo"fail";
}
?>