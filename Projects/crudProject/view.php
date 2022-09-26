<?php

include "config.php";

$sql = "SELECT * FROM users";

$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title> View Page </title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <div class="container">
    <h2> users </h2>
    <table class="table">

      <head>
        <tr>
          <th> ID </th>
          <th> First Name </th>
          <th> Last Name </th>
          <th> Email </th>
          <th> Gender </th>
          <th> Action </th>
        </tr>
        </thread>
        <tbody>

          <?php
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) { //how you represent php in html beware of {}
?>

          <tr>
            <td>
              <?php echo $row['id']; ?>
            </td>
            <td>
              <?php echo $row['firstname']; ?>
            </td>
            <td>
              <?php echo $row['lastname']; ?>
            </td>
            <td>
              <?php echo $row['email']; ?>
            </td>
            <td>
              <?php echo $row['gender']; ?>
            </td>
            <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>"> Edit </a> &nbsp;
              <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>"> Delete </a>
            </td>
          </tr>
          <?php
  }

}
?>
        </tbody>
    </table>
  </div>
</body>

</html>