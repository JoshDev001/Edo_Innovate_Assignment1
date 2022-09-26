<?php

include('config.php');

// Checking if the submit button on the form is pressed; and when it is, fields are required to be sent to the database

if (isset($_POST['submit'])) {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    // Next, enter the values from the fields into the database
    // $sql = "INSERT INTO 'users' ('firstname','lastname','email', 'password','gender') VALUES ('$first_name','$last_name','$email','$password','$gender')";
    $sql = "INSERT INTO users (firstname, lastname, email, password, gender) VALUES ('$first_name','$last_name','$email','$password','$gender')";

    //Next, execute the querry 
    $result = $conn->query($sql);
    if ($result == TRUE) {
        echo "New record created Sucessfully";
    }
    else {
        echo "Error:" . $sql . "<br />" . $conn->error;
    }
    $conn->close();
}

?>
<!DOCTYPE html>
<html lang="en">

<body>

    <h2> Signup Form </h2>

    <form action="" method="POST">
        <fieldset>
            <legend> Personal Information: </legend>
            First Name: <br>
            <input type="text" name="firstname"> <br>

            Last Name: <br>
            <input type="text" name="lastname"> <br>

            E-mail: <br>
            <input type="text" name="email"> <br>


            Password: <br>
            <input type="password" name="password"> <br>

            Gender: <br>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female

            <br><br>
            <input type="submit" value="submit" name="submit">

        </fieldset>



    </form>

</body>

</html>