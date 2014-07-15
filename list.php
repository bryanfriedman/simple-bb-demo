<?php
ini_set("display_errors", true);
error_reporting(E_ALL);

$con=mysqli_connect("localhost","bb-user","bb-password","simple-bb-demo");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>E-mail</th>
<th>Comment</th>
</tr>

<?php
$result = mysqli_query($con,"SELECT * FROM `main-bb`");
if ( false===$result ) {
  echo "Query failed: " . mysqli_connect_error($con);
}
else {

   while($row = mysqli_fetch_array($result)) {
     echo "<tr>";
     echo "<td>" . $row['id'] . "</td>";
     echo "<td>" . $row['name'] . "</td>";
     echo "<td>" . $row['email'] . "</td>";
     echo "<td>" . $row['comment'] . "</td>";
     echo "</tr>";
   }

}

?>

<tr>
<form method="post" action="post.php">
<td><input type="submit" value="Post" /></td>
<td><input type="text" name="name" id="name" /></td>
<td><input type="text" name="email" id="email" /></td>
<td><textarea name="comment" id="comment"></textarea></td>
</form>
</tr>

</table>

<?php
mysqli_close($con);
?>