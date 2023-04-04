<?php

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$id = $_GET["id"];

$sql = "UPDATE product SET status_id = 0 WHERE id = $id";

if (mysqli_query($conn, $sql)) {
  echo "<script>alert('✔Record is successfully deleted')</script>";
  header("Location:./master.php");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>