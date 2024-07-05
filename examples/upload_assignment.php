<?php

// ************************************For WARNING REMOVAL *******************************
/* TO SEE WARNINGS COMMENTS THIS LINE -> */error_reporting(E_ALL ^  E_WARNING);


// Include the database configuration file
include ("connect_examspace.php");
$statusMsg = '';
// File upload path
$class=$_POST['class'];
$sem=$_POST['semester'];
$sub=$_POST['subject'];
$targetDir = "C:/xampp/htdocs/examspace_project/uploads_assignment/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){

    $description= $_POST['description'];
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf','docx');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $con->query("INSERT INTO assignments (`description`, `file`,`class`,`semester`,`subject`) VALUES ('$description','$fileName','$class','$sem','$sub')");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo "<p>".$statusMsg."</p>";
?>
<html>
     <head>
        
        <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
        </head>
    <body>
        <style>
            p{
                margin-top: 50px;
                text-align: center;

                font-size: 18px;
            }
        </style>
  
<?php
error_reporting(0); 
?>
       
        <form action="all_assignment.php">
            <center>
                <button type="submit" class="btn btn-primary pull-right" name="submit">View Files</button>
            </center>
        </form>
    </body>
</html>