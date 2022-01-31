<?php

session_start();
include_once './dbconfig.php';


$con= mysqli_connect($host,$user,$password,$db_name);

mysqli_select_db($con, 'travelagency');

$name= $_POST['user'];
$pass=md5($_POST['password']);

$s= "select * from `userregistration` where `name` = '$name' and `password`='$pass'";


$result = mysqli_query($con, $s);

$num= mysqli_num_rows($result);

if($num == 1){
    $_SESSION["username"] =$name;

   header('location:index.php');
}else{
    header('location:login.php');
}


?>