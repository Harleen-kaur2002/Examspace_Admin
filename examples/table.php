<?php
include("header.php");
?>
 <?php
 include("connect_examspace.php");
 $query= mysqli_query($con,"SELECT * FROM user");
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
                  <h4 class="card-title ">Users Data</h4>
                  <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                </div>
                <div class="card-body">
                  <div class="table-responsive">    
                  <table class="table">
                      <thead class=" text-primary"> 
                        <?php
                      if(mysqli_num_rows($query)>0)
{
 ?>
    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Username
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          password
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                      </thead>
                      <?php
        $i=0;
        while($row=mysqli_fetch_array($query)){
          $i++;
          ?>
          <tr>                                                   
              <td><?=$i?></td>
              <td><?=$row["username"];?></td>
              <td><?=$row["email"];?></td>
              <td><?=$row["password"];?></td>

              <td>
             <a href="table_edit.php?id=<?= $row["id"]; ?>">
                  <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                </a>
             </td>
             <td>
             <a href="table_delete.php?id=<?= $row["id"]; ?>">
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
         
            