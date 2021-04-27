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
$id=$_POST['id'];
$login=$_SESSION['login'];
$link='home.php';
$link2='finder.php';
$sql = "SELECT * FROM blogs WHERE ID='".$id."'";
$result = mysqli_query($induction, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo  "Name: " . $row["Zag"]. "<br>" . $row["Info"]."<br> ".$row["Author"]." <br>".$row["Data"]. "<br>";
     echo "<br>";
  echo "<a href='".$link."'>Back to Home</a>";
   echo "<br>";
  echo "<a href='".$link2."'>Back to finder</a>";
  }
} else {
  echo "Error";
}

 ?>