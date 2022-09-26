<?php
 //To save data to the database, first connect to database.
 include('config/db_connect.php');


$title = $email = $ingredients ='';
$errors = array('email' =>'', 'title'=>'', 'ingredients'=> '');
// if (isset($_GET['submit'])){
//     echo $_GET['email'];
//     echo $_GET['title'];
//     echo $_GET['ingredients'];
// }
if( isset($_POST['submit'])){ 
  

    //check email
    if(empty($_POST['email'])){
        $errors['email'] = "An email is required <br/>";
    }else{
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'email must be a valid email address';
        }
        // echo htmlspecialchars($_POST['email']);
    }
// check title
    if(empty($_POST['title'])){
        $errors['title'] =  "A title is required <br/>";
    } else {
        $title = $_POST['title'];
        if (! preg_match('/^[a-zA-z\s]+$/', $title)){
            $errors['title'] = 'Title must be letters and spaces only';
        }
        // echo htmlspecialchars($_POST['title']);
    }
// check ingredients
    if(empty($_POST['ingredients'])){
        $errors['ingredients'] = "At least one ingredient is required <br/>";
    } else {
        $ingredients = $_POST['ingredients'];
        if (! preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
            $errors['ingredients'] = 'Ingredients must be a comma separated list';
        // echo htmlspecialchars($_POST['ingredients']);
    }
}
//if no errors inside the array_filter, it evaluates to faalse. N.B: 6 falsy values and an empty string is one of them.

if (array_filter($errors)){
    // echo " errors in the form";
}else{
    // echo " form is valid";
    // header('Location: project.php'); // moved this after saving to db

    //since form is valid, we would now import into the database
    // But first we have to protect our data going into the database using mysqli_real_escape_string

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

    //Now after preparing our data, we write the string that will do that for us
  // creating new variable called SQL
  // Then we write the appropriate my_SQL codes for inserting values into a database
  
  $sql =  "INSERT INTO pizzas(title, email, ingredients) VALUES('$title', '$email', '$ingredients')";

  // After Inserting into the database, we want to save it and check that it works
  // Save to db and check if successful (make query),
    if(mysqli_query($conn, $sql)){
        //succcess
        header('Location: project.php');
    }else{
        //error
        echo 'query error: '.mysqli_error($conn); //outputing the 
    }
}

} //end of POST check

?>

<!DOCTYPE html>
<html>
   <?php include('templates/header.php'); ?> 

   <section class="container grey-text">
    <h4 class = "center">Add a Pizza</h4>
    <form class = "white" action="<?php echo $_SERVER['PHP_SELF'] ?>" method ="POST">
       <label> Your Email: </label>
        <input type="text" name="email" value = "<?php echo htmlspecialchars($email) ?>" >
        <div class="red-text"><?php echo $errors['email']; ?> </div>
        <label> Pizza TItle: </label>
        <input type="text" name="title" value = "<?php echo htmlspecialchars($title) ?>" >
        <div class="red-text"><?php echo $errors['title']; ?></div>

        <label> Ingredients (comma separated): </label>
        <input type="text" name="ingredients" value = "<?php echo htmlspecialchars($ingredients) ?>" >
        <div class="red-text"><?php echo $errors['ingredients']; ?></div>

        <div class="center">
            <input type="submit" value="submit" name="submit" class="btn brand z-depth-0">

        </div>
    
    </form>

   </section>


   <?php include('templates/footer.php'); ?> 
    

</html>