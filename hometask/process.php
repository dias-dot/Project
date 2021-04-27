<?php 
include 'db.php';
if (isset($_POST['submit'])) {

$login=filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass=filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);


$link='index.php';
$sql = "INSERT INTO users (Login, Password)
VALUES ('$login', '$pass')";
if (mysqli_query($induction, $sql)) {
  echo "New record created successfully";
  echo "<br>";
  echo "<a href='".$link."'>Login page</a>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($induction);
}

mysqli_close($induction);
}	
 ?>