<?php

session_start();

if (isset($_SESSION['success'])){
    $userID = $_SESSION['userID'];
    $email = $_SESSION['email'];
}
else{
    header('location:../dbms_project/login.php');
}
?>
<!doctype html>

<link href="https://fonts.googleapis.com/css2?family=Anton&family=Libre+Caslon+Display&family=Poiret+One&display=swap%27);
" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

<link rel="stylesheet" href="home.css">
<h1 class = "header">WELCOME <span class = "user"><b><?php echo $email; ?></b></span></h1>

<div class = "link">
    <a href="suggestions/suggestions.php"><i class = "fas fa-heart"></i>SUGGESTIONS</a>
</div>
<div class = "link">
    <a href="notes.php"><i class = "fas fa-sticky-note"></i>ADD NOTES</a>
</div>
<div class = "link">
    <a href="books.php"><i class = "fas fa-book-open"></i>BOOKS</a>
</div>
<div class = "link">
    <a href="exams.php"><i class = "fas fa-university"></i>COLLEGES</a>
</div>
<div class = "link">
    <a href="logout.php"><i class = "fas fa-user"></i>LOG OUT</a>
</div>

<div class = "link">
    <a href="deleteuser.php"><i class = "fas fa-user-slash"></i>DELETE ACCOUNT</a>
</div>

</html>