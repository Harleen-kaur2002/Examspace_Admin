<?php
include("header.php");
?>
      <!-- End Navbar -->
        <!-- fetch data -->
      <?php
include("connect_examspace.php");
$query= mysqli_query($con,"SELECT * FROM contact");
if(!$query)
{
    echo"not working";
}
?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Contact Details</h4>
                  <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <?php
if(mysqli_num_rows($query)>0)
{
 ?>
                    <table class="table">
                      <thead class=" text-primary">
                      <th>
                          S.no
                        </th>
                        <th>
                          firstname
                        </th>
                        <th>
                          lastname
                        </th>
                        <th>
                          Email 
                        </th>
                        <th>
                          phone
                        </th>
                        <th>
                          messages
                        </th>
                        
                      </thead>
                      <?php
        $i=0;
        while($row=mysqli_fetch_array($query)){
          $i++;
          ?>
          <tr>                                                   
              <td><?=$i?></td>
              <td><?=$row["fname"];?></td>
              <td><?=$row["lname"];?></td>
              <td><?=$row["email"];?></td>
              <td><?=$row["phone"];?></td>
              <td><?=$row["message"];?></td>
              <td>
              <a href="edit_contact.php?id=<?= $row["id"]; ?>">           
                    <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                   
                                </td>
                                <td>
                                <a href="delete_contact.php?id=<?= $row["id"]; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                                </a>
                                </td>
                            </tr>
           
            <?php
           
        }
  ?>
                     
                    </table>
                    <?php
}
else{
    echo"no result found";
}
?>
                  </div>
                </div>
              </div>
            </div>
         
            