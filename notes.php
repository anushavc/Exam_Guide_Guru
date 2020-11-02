<?php
session_start();
require_once('addnotes.php');
$con = mysqli_connect("localhost", "root", "", "dbms_project");

if (isset($_SESSION['success'])){
    $userID = $_SESSION['userID'];
    $email = $_SESSION['email'];
}
else{
    header('location:login.php');
}
echo $email;
$result = "select userID from notes where userdID = $userID";
$num_of_rows = mysqli_num_rows($result);
if($num_of_rows = 0){
    "insert into notes values ('$userID', '')";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel = "https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/icon.min.css">
    <link rel="stylesheet" href="notes.css">
    <title>Notes</title>
</head>
<body>
<div>
    <nav class = "navbar">
                <div class = "nav-links">
                <a href="home.php" id = "brand" class = "nav-link"><i class = "fa fa-book"></i>Exam Guide Guru</a>
                </div>
                <div class = "nav-links">
                <a href="home.php" class = "nav-link">Dashboard</a>
                <a href="suggestions/suggestions.php" class = "nav-link">Suggestions</a>
                <a href="logout.php" class = "nav-link">Log out</a>
                </div>
</nav></div>
<div class = "container">

<h1 class = "header">ADD NOTES</h1>

<?php
        $sql = "select text from notes where userId = '$userID'";
        $result = mysqli_query($con,$sql) or die("cant perform query");
        
        while($row = mysqli_fetch_assoc($result)) { 
          
            $text = $row['text'];
        
        }
        
        addNotes($text, $userID);
        
?>

</div>
</body>
</html>
