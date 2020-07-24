<?php

session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'testcrud');

$name = $_POST['username'];
$pass = $_POST['password'];

$s = "SELECT id FROM login WHERE username='$name' AND passwd='$pass'";
$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);
if($num == 1){
    echo"User is already taken...";
}else {
    $reg = "INSERT INTO login(username,passwd) VALUES('$name','$pass')";
    mysqli_query($con, $reg);
    echo"Registration Successful";
    header("location: fitness/index.html");
}

?>