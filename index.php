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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<body>
  <header class="a">
    <nav id="navbar">
        <div class="container">
                <h1 class="logo"> <i class="fas fa-book"></i> Exam Guide Guru</h1>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="login.php"><i class="fas fa-user"></i> Login </a></li>
                </ul>
        </div>
        </nav>
        <div class="intial_heading" >
        <div class="one">
           <p style="weight:150px;"><b>Welcome to <span style="font-size:30px">EXAM GUIDE GURU</span></b></p>
          <p style="weight:150px;">This is your one stop platform to find the best entrance exam guides for Indian entrance exams(both medical and engineering)<p>
              <p>We also give you the top colleges for the exam you are attempting.<p>
          </p>
          <p style="font-size:25px"><b>All the best for your exams!</b></p>
        </div>
</div>
   <header>
    <main style="font-size:20px">
    <section class="book">
        <p><b>Get to filter the books and find out the recommended ones</b></p>
        <form method="post" action="books.php">
           <button id="buttonn"><i class="fas fa-book-open"></i></button>
        </form>
    
    </section>
    <section class="college">
    <p><b>Find the best colleges for the common indian entrance examinations</b></p>
        <form method="post" action="exams.php">
        <button id="button1"><i class="fas fa-university"></i></button>
        </form>
    </section>
   <section class="d">
       <p style="font-size:35px;"><b>Why should i sign up?</b></p>
       <p>These are just some of the few features:</p>
       <div class="row">
           <div class="column">
               <img src="./notes.jpeg" class="m1" alt="image1" style="width:100%">
           </div>
           <div class="column">
               <img src="./dashboard.jpeg" class="m2" alt="image2" style="width:100%">
           </div>
           <div class="column">
           <img src="./suggestions.jpeg" class="m3" alt="image3" style="width:100%">
           </div>
       </div>
   </section>
   <section class="college"  style="font-size:25px">
     <p><b>Take our survey to help us better our book recommendations</b></p>
     <form action="survey.php">
     <input type="submit" value="Give survey" id="survey_button">
    </form>
   </section>
</main>
</body>
</html>
