<?php 
include 'db.php';
session_start();
if (isset($_POST['submit'])) {

$login=mysqli_real_escape_string($induction,$_POST['login']);
$pass=mysqli_real_escape_string($induction,$_POST['pass']);
$link="index.php";
if ($login != "" && $pass != ""){

        $sql_query = "select count(*) as cntUser from users where Login='".$login."' and Password='".$pass."'";
        $result = mysqli_query($induction,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['login']=$login;
            header('Location: home.php');
            echo "GREAT WORK";
        }else{
            echo "Invalid username and password";
           echo "<a href='".$link."'>Login page</a>";
        }

    }
mysqli_close($induction);
}	
 ?>