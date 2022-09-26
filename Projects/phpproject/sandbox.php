<?php

if(isset ($_POST['submit'])){
    // session_start();

    // $_SESSION['name'] = $_POST['name'];

    // // echo $_SESSION['name'];
    // header('Location: project.php');

    // Using cookies with gender
setcookie('gender', $_POST['gender'], time() + 86400);
session_start();

$_SESSION['name'] = $_POST['name'];
header('Location: project.php');

}
//N.B: isset is like add event listeners in Javascript, Because it tells us if the required button or id has been assigned

// $score = 10;

// echo $score > 40 ? "high score!" : "low score";
// echo $val;

// echo $_SERVER['SERVER_NAME'] . '<br />';
// echo $_SERVER['REQUEST_METHOD'].'<br />';
// echo $_SERVER['SCRIPT_FILENAME'].'<br />';
// echo $_SERVER['PHP_SELF'].'<br />'; // USED IN FORM ACTION INSTEAD OF TITLE OF PAGE.. BECAUSE IT RETAINS SAME PROPERTY WHEN MOVED 

// sessions
// A session is stores data between requests, i.e between loading different pages. Unlike a cookie

?>

<html lang="en">
<head>
    
    <title>php tuts</title>
</head>
<body>
    
<form action="<?php echo$_SERVER['PHP_SELF'] ?>" method="POST">
<input type="text" name="name" >
<select name="gender">
    <option value="male"> male </option>
    <option value="female"> female </option>
</select>
<input type="submit" value="submit" name="submit">
</form>
<!-- <p><?php echo $score > 40 ? 'highscore!' : "low-score"; ?> </p> -->

</body>
</html>