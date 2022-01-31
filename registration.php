<?php

session_start();
header('refresh:1;url=login.php');

include_once './dbconfig.php';

$con= mysqli_connect($host,$user,$password,$db_name);


mysqli_select_db($con, 'travelagency');

$name= $_POST['user'];
$pass= md5($_POST['password']);

$s= "select * from `userregistration` where `name` = '$name'";

$result = mysqli_query($con, $s);

$num= mysqli_num_rows($result);

if($num == 1){
    echo "Username Already Taken";
}else{
    $reg="insert into userregistration(name , password) values ('$name' , '$pass')";
    mysqli_query($con, $reg);
    echo "Registration Successful";
}


?>