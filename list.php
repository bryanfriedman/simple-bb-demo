<?php
ini_set("display_errors", true);
error_reporting(E_ALL);

$con=mysqli_connect("localhost","bb-user","bb-password","simple-bb-demo");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM main-bb");

while($row = mysqli_fetch_array($result)) {
  echo $row['id'] . " - " . $row['name'] . " - " . $row['email'] . " - " . $row['comment'];
  echo "<br>";
}

mysqli_close($con);
?>