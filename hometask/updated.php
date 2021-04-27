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
if (isset($_POST['submit1'])) {
$id=$_POST['id1'];
$login=$_SESSION['login'];
if (isset($_POST['submit1'])) {
	$sql = "SELECT * FROM blogs WHERE ID='".$id."' and Author='".$login."'";
$result = mysqli_query($induction, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
  	echo "BEFORE UPDATE"."<br>";
    echo  "Name: " . $row["Zag"]. "<br>" . $row["Info"]."<br> ".$row["Author"]." <br>".$row["Data"]. "<br>";
     echo "<br>";
   echo "<br>";
 
   echo "<br>";
    echo "<br>";
     echo "<br>";

  }
} else {
  echo "Error2";
}
}
}
 ?>



 <?php 
if (isset($_POST['submit1'])) {
	$id=$_POST['id1'];
	$zag1=filter_var(trim($_POST['zag1']), FILTER_SANITIZE_STRING);
$text1=filter_var(trim($_POST['text1']), FILTER_SANITIZE_STRING);
$query="UPDATE `blogs` SET Zag='$zag1', Info='$text1' WHERE ID='".$id."' and Author='".$login."'";
$query_run= mysqli_query($induction,$query);
if ($query_run){
	
	$sql1 = "SELECT * FROM blogs WHERE ID='".$id."' and Author='".$login."'";
$result1 = mysqli_query($induction, $sql1);
if (mysqli_num_rows($result1) > 0) {
  while($row1 = mysqli_fetch_assoc($result1)) {
    echo "UPDATED DATA"."<br>";
    echo  "Name: " . $row1["Zag"]. "<br>" . $row1["Info"]."<br> ".$row1["Author"]." <br>".$row1["Data"]. "<br>";
     echo "<br>";
   echo "<br>";
 
   echo "<br>";
    echo "<br>";
     echo "<br>";

  }
} 
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
	<label>Заголовок</label>
	<input type="text" name="zag1">
	<br>

	<label>Текст</label>
	<textarea name="text1" cols="20" rows="4" style="vertical-align: top;">	
	</textarea>
	<br>
	<input type="submit" name="submit1">
  <a href="delete.php">Delete</a>
</form>
</body>
</html>
