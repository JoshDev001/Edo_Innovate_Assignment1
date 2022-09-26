<?php
include "config.php";
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // $sql = "DELETE FROM users WHERE 'id' = '$user_id'";
    $sql = "DELETE FROM `users` WHERE `users`.`id` = '$user_id'";
    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "Record deleted sucessfully.";
    }
    else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}
?>