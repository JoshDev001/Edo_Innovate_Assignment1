<?php

//mysqli_real_escape_string = Is to check for malicious content//
include ('config/db_connect.php');
if(isset($_POST['delete'])){
    $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);
$sql = " DELETE FROM pizzas WHERE id = $id_to_delete";

// To check if successfully done
if (mysqli_query($conn, $sql)){
    //success
    header('Location: project.php');
}{
    //failure
    echo 'query error: '. mysqli_error($conn);
}
}

// Check GET request id parameter
if ( isset($_GET['id'])){
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    //make sql
    $sql = " SELECT * FROM pizzas WHERE id = $id";

    //get the query result
    // A query is like a pending question
    $result = mysqli_query($conn, $sql);

    // fetch result in array format using - mysqli_fetch_assoc

    $pizza = mysqli_fetch_assoc($result);

    // freeing the result and closing the connection
    mysqli_free_result($result);
    mysqli_close($conn);


    // print_r($pizza); It works, so we ignore it and ads it to our html
} 

?>

<html lang="en">
<?php include("templates/header.php"); ?>
<div class="container center grey-text">
    <?php if ($pizza): ?>
<h4> <?php echo htmlspecialchars($pizza['title']); ?> </h4>
<p> created by: <?php echo htmlspecialchars($pizza['email']); ?> </p>
<p> <?php echo date($pizza['created_at']) ?> </p>
<h5> Ingredients </h5>
<p> <?php echo htmlspecialchars($pizza['ingredients']); ?> </p>
<!-- DELETE FROM -->
<form action="more_details.php" method="POST">
    <input type="hidden" name="id_to_delete" value="<?php echo $pizza['id'] ?>">
    <input type="submit" name="delete" id="Delete" value = "Delete" class="btn brand z-depth-0">
</form>
<!-- action tells us where we are reading the form content from -->
    <?php else: ?>

        <!-- incase an id is called that does not exist -->

        <h5> No such pizza exists!  </h5>

        <?php endif; ?>

</div>

<!-- <h2> DETAILS </h2> -->
<?php include("templates/footer.php"); ?>

</html>

