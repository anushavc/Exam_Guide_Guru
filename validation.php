<?php
session_start();

$_SESSION['success'] = "";
$password = ""; 
$email    = "";
$userID="";
$name = "";
$con = mysqli_connect("localhost", "root", "", "dbms_project");
$email = $_POST['email'];
$password = $_POST['password'];
$email = stripcslashes($email);
$password = stripcslashes($password);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$sql = "select*from user where email = '$email' && password = '$password';";
$result = mysqli_query($con,$sql) or die("cant perform query");
$sql2 = "select userID from user where email = '$email';";
$result2 = mysqli_query($con, $sql2) or die("cant get primary key");
$row2 = mysqli_fetch_assoc($result2);
$userID = $row2['userID'];
while($row = mysqli_fetch_assoc($result)) {
    $email = $row['email'];
    $password = $row['password']; 
    
 }
$num_of_rows = mysqli_num_rows($result);

if($num_of_rows>0){
        $_SESSION['email'] = $email;
        $_SESSION['userID'] = $userID;
        $_SESSION['USER_LOGIN'] = 'yes'; 
        $_SESSION['success'] = 'welcome'; 
        header('location:home.php');
}
else{
    header('location:login.php');
}


?>