<?php
session_start();
require_once('component.php');
$con = mysqli_connect("localhost", "root", "", "dbms_project");

if (isset($_SESSION['success'])){
    $userID = $_SESSION['userID'];

}
else{
    header('location:../login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suggestions</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel = "https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/icon.min.css">
    
    <link rel="stylesheet" href="suggestions.css" type = "text/css">
</head>
<body>
    <div>
    <nav class = "navbar">
                <div class = "nav-links">
                <a href="../home.php" id = "brand" class = "nav-link"><i class = "fa fa-book"></i>Exam Guide Guru</a>
                </div>
                <div class = "nav-links">
                <a href="../home.php" class = "nav-link">Dashboard</a>
                <a href="../books.php" class = "nav-link">Search</a>
                <a href="../notes.php" class = "nav-link">Add Notes</a>
                <a href="../logout.php" class = "nav-link">Log out</a>
                </div>
    </nav></div>
    <h1 class = "header">SUGGESTIONS </h1>
    
    
    <div class="container">
        <?php
        $sql = "select books.name, images, price, books.author,books.link,books.bookID, user.userID from books join survey on books.bookID = survey.book_ID join user on survey.exam_id = user.examid and user.userID = '$userID' group by book_id order by count(book_id) desc limit 5;";
        $result = mysqli_query($con,$sql) or die("error");
       
        while($row = mysqli_fetch_assoc($result)) {   
            $name = $row['name'] ;
            $images = $row['images'];
            $price = $row['price'];
            
            $author = $row['author'];
            $link = $row['link'];
            $user_id = $row['userID'];
            $bookID = $row['bookID'];
            component($name, $images, $price,$author,$link, $user_id, $bookID);
        }
        ?>
    </div>
</body>
</html>