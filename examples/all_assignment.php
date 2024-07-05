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
  <style>
    img {
      height: 20vh;
    }
  </style>




</head>

<body class="">
  <?php
  include("header.php");
  ?>
  <!-- End Navbar -->
  <!-- fetch data -->
  <?php
  include("connect_examspace.php");
  $query = mysqli_query($con, "SELECT * FROM assignments");
  if (!$query) {
    echo "not working";
  }
  ?>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Assignments</h4>
              <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <?php

                if (mysqli_num_rows($query) > 0) {

                ?>
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Sr. No.
                      </th>
                      <th>
                        Assignment
                      </th>
                      <th>
                        Description
                      </th>
                      <th>
                        classes
                      </th>
                      <th>
                        semester
                      </th>
                      <th>
                        subject
                      </th>
                    </thead>
                    <?php
                    $i = 0;
                    while ($row = mysqli_fetch_array($query)) {
                      // $imageURL = 'uploads/'.$row["file"];
                      $i++;
                    ?>
                      <tr>
                        <td><?=$i ?></td>
                        <td><?= $row["file"] ?></a></td>
                        <td><?= $row["description"]; ?></td>
                        <td><?= $row["class"]; ?></td>
                        <td><?= $row["semester"]; ?></td>
                        <td><?= $row["subject"]; ?></td>

                        <td>
                        <a href="edit_assignment.php?id=<?= $row["id"]; ?>">
                          <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button></td>
                        <td>
                                <a href="delete_assignment.php?id=<?= $row["id"]; ?>">
                        <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button></a></td>
                      </tr>
                    <?php
                    
                    }
                    ?>
                  </table>
                <?php
                } else {
                  echo "no result found";
                }
                ?>
              </div>
            </div>
          </div>
        </div>
        <?
        include_once('footer.php');
        ?>
</body>

</html>