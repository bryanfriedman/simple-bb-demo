<?php
ini_set("display_errors", true);
error_reporting(E_ALL);

$con=mysqli_connect("localhost","bb-user","bb-password","simple-bb-demo");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$comment = mysqli_real_escape_string($con, $_POST['comment']);

mysqli_query($con,"INSERT INTO `main-bb` (name, email, comment)
VALUES ('$name', '$email','$comment')");

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}

mysqli_close($con);

header("Location: list.php");
exit;
?>
