<?php include 'sql.php'; ?>

<?php

// escape variables for security
$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$comment = mysqli_real_escape_string($con, $_POST['comment']);

$sql="INSERT INTO `main-bb` (name, email, comment)
VALUES ('$name', '$email','$comment')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}

mysqli_close($con);

header("Location: list.php");
exit;
?>
