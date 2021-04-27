	<?php 
include 'db.php'; 
session_start();
$part_ip='127.0.0.1';
$part_name='root';
$part_p='';
$part_db='blogs';
$induction = mysqli_connect($part_ip,$part_name,$part_p,$part_db);
if ($induction==false) {
	echo "Error1";
}

$login=$_SESSION['login'];
if (isset($_POST['submit1'])) {
	$id=$_POST['id1'];
	$sql = "DELETE FROM blogs WHERE ID='".$id."' and Author='".$login."'";
$result = mysqli_query($induction, $sql);
if ($result) {
	# code...

echo "Record deleted successfully";
} 
else {
  echo "Error2";
}
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
<form method="post" action="">
	<input type="number" name="id1">
		<br>
	<input type="submit" name="submit1">
	<a href="home.php"> to HOME</a>
</form>
</body>
</html>
