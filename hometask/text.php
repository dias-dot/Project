<?php
include 'db.php'; 
session_start();
$part_ip='127.0.0.1';
$part_name='root';
$part_p='';
$part_db='blogs';
$induction = mysqli_connect($part_ip,$part_name,$part_p,$part_db);
if ($induction==false) {
	echo "Error";
}
if (isset($_POST['submit'])) {
$zag=filter_var(trim($_POST['zag']), FILTER_SANITIZE_STRING);
$text=filter_var(trim($_POST['text']), FILTER_SANITIZE_STRING);

$login=$_SESSION['login'];

$link='home.php';
$time = "SELECT Data FROM blogs";
$result = mysqli_query($induction, $time);
$sql = "INSERT INTO blogs (Zag, Info,Author)
VALUES ('$zag', '$text','$login')";
if (mysqli_query($induction, $sql)) {
	if (mysqli_num_rows($result) > 0) {
		while (	$row = mysqli_fetch_assoc($result)){
		$date=$row['Data'];
	}
}
  echo "Заголовка ".$zag."<br>"."Текст ".$text." "."<br>"."Time is ".$date;
  echo "<br>";
  echo "<a href='".$link."'>Back to Home</a>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($induction);
}

mysqli_close($induction);
}	
 ?>