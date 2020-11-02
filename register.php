<?php
session_start();
$email = '';
$password = '';
$name = '';
$exam = '';
$examid='';
$con = mysqli_connect("localhost", "root", "", "dbms_project");
$_SESSION['success'] = '';

$email = stripcslashes($email);
$password = stripcslashes($password);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$exam = stripcslashes($exam);
$examid = mysqli_real_escape_string($con, $_POST['exam']);
echo $examid;
$sql = "select*from user where email = '$email';";
$result = mysqli_query($con,$sql) or die("cant perform query");

while($row = mysqli_fetch_assoc($result)) {
    $email = $row['email'];
   
}
$num_of_rows = mysqli_num_rows($result);

if($num_of_rows>0){
        header('location: login.php');
}

else{
    $_SESSION['email'] = $email;
    

    $sqlInsert = "insert into user (password, email, examid) values ('$password', '$email', '$examid')";
    
    mysqli_query($con,$sqlInsert);
    
    $sql = "select userID from user where email = '$email'";
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_assoc($result)) { 
          
        $_SESSION['userID'] = $row['userID'];
    
    }
    
    
    

    header('location:./home.php');
    
}

?>