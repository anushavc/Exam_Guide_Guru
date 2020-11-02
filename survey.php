<?php 
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>EXAM_GUIDE_GURU</title>
    
</head>
<body style="background-color:rgb(48,38,43)">
<nav id="navbar">
        <div class="container">
                <h1 class="logo"> <i class="fas fa-book"></i> Exam Guide Guru</h1>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="login.php"><i class="fas fa-user"></i> Login </a></li>
                </ul>
        </div>
</nav>
<div style="background-color:rgb(48,38,43);color:  rgb(239,227,243,0.9) ;"> 
<h2 style="text-align:center;font-size:30px"> SURVEY</h2>
<br>
<p style="text-align:center;font-size:20px">Exam Guide Guru is a website designed for students to get recommendations for the best books to study from to pass our Indian entrance examinations with flying colors. This is a small survey that we are conducting to provide recommendations to your fellow students. We would appreciate if you could suggest more than two books for a certain exam. Thank you for taking our survey!</p>
<br>
<p style="text-align:center;font-size:20px">Note: It is not mandatory to suggest books for all exams as this survey is both for engineering and medical students.</p>
<form method="post" action="survey_connect.php" style="font-size:20px">
<br>
<br>
<br>
<div style="text-align:center">
<label  for="email">Enter your email: </label>
<input  type="email" id="email" name="email" style="width:300px;height:40px;font-size:20px">
</div>
<?php
                $sql="SELECT prepares1.bookID as a, prepares1.exam_id as b,exam.exam_name as c,books.name as d from books cross join prepares1 on books.bookID=prepares1.bookID cross join exam on exam.exam_id=prepares1.exam_id order by prepares1.exam_id";
                $result=$conn->query($sql);
                $tempvar = 0;

                while($row=$result->fetch_assoc()) 
                {
                       
                       if($tempvar != $row['b']){
                           $output='';
                           $output.='
                           <br>
                           <br>
                           <div style="background-color: rgb(239,227,243);color:rgb(48,38,43);width:60vw;text-align:left; margin: auto; ">
                           <hr style="width=50%;height:100px;background-color:rgb(48,38,43);border:none;padding:10px">
                           <br>
                        <label style="font-size:29px;font-weight:10px;margin-left:1rem"><b><span class="test">'.$row['c'].'</span></b></label>
                        <input type="hidden" value="'.$row['b'].'">
                         <br>
                         <br>
                        ';
                        
                        echo $output;
                       }
                       
                       $tempvar = $row['b'];

                ?>
         <p><input style="font-size:15px;margin-bottom:1rem;margin-left:1rem" type="checkbox" name="book[]" value="<?=$row['a'];?>|<?=$row['b'];?>"><b> <?=$row['d'];?></b></p>
         <br>
         <?php } ?>
         <div style="background-color:rgb(48,38,43);height:25vh;display:flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;">
         <input style="background-color:rgb(239,227,243);color:rgb(48,38,43)" type="submit" name="submit" value="submit" id="survey_button1">
         </div>
        </div>
</div>

</form>
</body>
</html>

