<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";


// Step 1: creating a connection for our database
$conn = new mysqli($servername, $username, $password, $dbname);

//Test the connection created for errors
if ($conn->connect_error){
    die("connection Failed" . $conn->connect_error);
    
}else{
    // echo "Connection Successful";
}


?>