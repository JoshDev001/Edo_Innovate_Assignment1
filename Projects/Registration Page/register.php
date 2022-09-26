<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = "";
$DATABASE_NAME = "form";

$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_error()) {
    exit('Error connecting to the database' . mysqli_connect_error());
}

if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
    exit('Empty Field(s)');

}
if (empty($_POST['username'] || empty($_POST['password']) || empty($_POST['email']))) {
    exit('Values Empty');
}

//TO check if the values are already in the field, if yes, doesn't enter it again

if ($stat = $conn->prepare('SELECT id, password FROM users WHERE username = ?')) {
    $stat->bind_param('s', $_POST['username']);
    $stat->execute();
    $stat->store_result();

    if ($stat->num_rows > 0) {
        echo 'Username Already Exists. Try Again';
    }
    else { //we send it to the data base
        if ($stat = $conn->prepare('INSERT INTO users(username, password, email) VALUES (?, ?, ?)')) {
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $stat->bind_param('sss', $_POST['username'], $password, $_POST['email']);
            $stat->execute();
            echo 'Sucessfully Registered';
        }
        else {
            echo 'Error Occured';
        }
    }
    $stat->close();

}
else {
    echo 'Error Occured';
}
$conn->close();

?>