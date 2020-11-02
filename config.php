<?php 
$conn=new mysqli("localhost","root","","dbms_project");
if($conn->connect_error)
{
    die("connection error").$conn->connect_error;
}
?>