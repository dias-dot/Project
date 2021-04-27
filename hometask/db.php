<?php 
$part_ip='127.0.0.1';
$part_name='root';
$part_p='';
$part_db='users';
$induction = mysqli_connect($part_ip,$part_name,$part_p,$part_db);
if ($induction==false) {
	echo "Error";
}
 ?>