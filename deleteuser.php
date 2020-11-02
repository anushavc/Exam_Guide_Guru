<?php
session_start();

if (isset($_SESSION['success'])){
    $userID = $_SESSION['userID'];
    $email = $_SESSION['email'];

}

$sql = "delete from user where userID  = '$userID'";
$con = mysqli_connect("localhost", "root", "", "dbms_project");
mysqli_query($con, $sql);
mysqli_query($con, "delete from notes where userID  = '$userID'");
session_destroy();
header('location:login.php');
?>