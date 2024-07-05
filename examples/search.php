<?php

include_once('connect_examspace.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Data</title>
</head>
<body>
    
    <?php 

// $conn = new mysqli('localhost', 'root', '', 'tutorial');
if(isset($_POST['search'])){
   $searchKey = $_POST['search'];
   $sql = "SELECT * FROM assignments WHERE  name='$searchKey' || class='$searchKey'";
}else
$sql = "SELECT * FROM assignments";
$result = $con->query($sql);
?>
          <form action="" method="POST"> 
     <div >
        <input type="text" name="search"  placeholder="Search By Name" value=<?php echo @$_POST['search']; ?> > 
     </div>
     <div >
      <button class="btn">Search</button>
     </div>
   </form>
     
        <table border="1" >
            <tr>
            <th>
                        Sr. No.
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
              
            </tr>
            <?php
                    $i = 0;
                    while ($row = $result->fetch_object()):
                      // $imageURL = 'uploads/'.$row["file"];
                    
                    ?>
                      <tr>
                        <td><?=$i ?></td>
                        <td><?= $row["description"]; ?></td>
                        <td><?= $row["class"]; ?></td>
                        <td><?= $row["semester"]; ?></td>
                        <td><?= $row["subject"]; ?></td>
                      </tr>
            <?php
           
        endwhile; 
            ?>
        </table>
       
 
</body>
</html>