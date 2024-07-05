<?php
include("header.php");

                  include("connect_examspace.php");
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Upload Question paper</h4>
                  <!-- <p class="card-category">Complete your profile</p> -->
                </div>
                <div class="card-body">
                <form method="POST"action="upload_ques.php" enctype="multipart/form-data">
                <div class="row">
                       <div class="col-md-5"> 
 <!-- <div class="form-group">  -->
                          <label >File</label>
                          <input type="file" class="form-control"  name="file">
                        </div>
                      </div>
                       <div class="row">
                       <div class="col-md-5"> 
 <!-- <div class="form-group">  -->
                          <label >Description</label>
                          <input type="text" class="form-control"  name="description">
                        </div>
                      </div>
                      <div class="row">
                       <div class="col-md-5"> 
                       <label >class:</label>
                       <select name="class" >
<option>BCA </option>
<option> MCA </option>
<option> B.TECH </option>
<option> M.TECH </option>
</select>
 
              </div>
                      </div>
                      <div class="row">
                       <div class="col-md-5"> 
                       <label>semester:</label>
                       <select name="semester" >
<option>1st </option>
<option> 2nd </option>
<option> 3rd </option>
<option> 4th </option>
<option> 5th </option>
<option> 6th </option>
</select>
 
              </div>
                      </div>     
                      <div class="row">
                       <div class="col-md-5"> 
                       <label >subject:</label>
                       <select name="subject" >
<option>C language </option>
<option>Digital electronics  </option>
<option>communication skills </option>
<option> fundamentals of computer </option>
<option>graphic tools </option>
<option> C++ </option>
<option> IWD </option>
<option> Networking </option>
<option> statistics </option>
<option> Communication skills 2 </option>
<option> Data Structure </option>
<option> DBMS </option>
<option> System Anaysis And Design </option>
<option> Computer Architecture </option>
<option> Ruby On Rails </option>
<option> Computer Graphics </option>
<option> PHP </option>
<option> Network security and cryptography </option>
<option> Software Engineering </option>
<option> Operating System </option>
<option> Java </option>
<option> Python </option>
<option> DDBMS </option>
<option> Digital Marketing </option>
<option> Multimedia </option>
<option> Android </option>
<option> Artificial Intelligence </option>
<option>Image Processing </option>
<option> Cyber Security </option>
<option> ASP.NET </option>

</select>
 
              </div>
                      </div>       
                 
                <button type="submit" class="btn btn-primary pull-right" name="submit">Update Profile</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
        <style>
 select {
        width: 100px;
        margin: 10px;
    }
    select:focus {
        min-width: 100px;
        width: auto;
    }

        </style>
            <!-- <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="javascript:;">
                    <img class="img" src="../assets/img/faces/marc.jpg" />
                  </a>
                </div> -->
                <!-- <div class="card-body">
                  <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                  <h4 class="card-title">Alec Thompson</h4>
                  <p class="card-description">
                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                  </p>
                  <a href="javascript:;" class="btn btn-primary btn-round">Follow</a>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
     
