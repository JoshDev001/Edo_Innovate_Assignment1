<?php
// connecting to database
//fetching data from the database
$conn = mysqli_connect('localhost','shaun', 'test1234', 'ninja pizza');

//checking connection
if (!$conn){
   echo 'Connection error:'. mysqli_connect_error();
}


?>