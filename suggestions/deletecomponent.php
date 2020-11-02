<?php 
session_start();
$sid = $_GET['sid'];
echo $userID;
echo $sid;

$con = mysqli_connect("localhost", "root", "", "dbms_project");
mysqli_query($con, "delete from suggestions where id = '$sid'");
header('location:./suggestions.php');
?>