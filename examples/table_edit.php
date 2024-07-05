<?php
include_once("connect_examspace.php");
$i=$_GET['id'];

$query =mysqli_query($con,"select * FROM user where id=$i");
if(!$query)
{
  echo"not working";
}
$row = mysqli_fetch_array($query);

if(isset($_POST['submit'])) // when click on Update button
{
    $username = $_POST['username'];
    $email = $_POST['email'];

   
   
	
    $edit = mysqli_query($con,"update user set username='$username', email='$email' where id='$i'");
	
    if($edit)
    {
       // mysqli_close($con); // Close connection
        header("location:table.php"); // redirects to all records page
      
    }
       	else{
               echo"SOMETHING WENT WRONG";
           }
}

?>


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
    <?php
  include_once('header.php')
  ?>
  
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                  <form method="post">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" name="username" value="<?=$row['username'];?>" class="form-control" >
                        </div>
                      </div>
                      
                  <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email"name="email" value="<?=$row['email'];?>" class="form-control">
                        </div>
                      </div>
                      
                    </div>  
                
                    </div>
                    
                    <button type="submit" class="btn btn-primary pull-right" name="submit">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            
    
</body>

</html>