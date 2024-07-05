<?php
//database configuration
$dbhost ="localhost";
$dbUsername ="root";
$dbPassword="";
$dbName="project_examspace";

// Create database connection
$con = new mysqli($dbhost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
