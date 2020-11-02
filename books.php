<?php 
require('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
     <title>Books</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<body style="background-color:rgb(48,38,43);">
<nav id="navbar">
        <div class="container">
        <h1 style="text-align:center">BOOKS</h1>
                <ul>
                    <li><a href="index.php">Back</a></li>
                </ul>
        </div>
    </nav>

<div class="container-fluid" style="background:url('final_main.jpg'); filter: brightness(1.1);">
<br>
<br>
    <div class="row">
        <div class="col-lg-3">
            <h5  class="text-center" style="color:rgb(48,38,43);"><b>FILTER</b></h5>
            <br>
            <div style="background-color:rgb(48,38,43);color:white;padding:5px;"><h6>Select Exam</h6></div>
            <br>
            <ul class="list-group">
                <div style="height:180px;overflow-y:auto;overflow-x:hidden;">
                <?php
                $sql="SELECT DISTINCT exam_name from exam";
                $result=$conn->query($sql);
                while($row=$result->fetch_assoc())
                {
                ?>
                <li class="list-group-item" style="background-color:rgb(239,227,243,0.7)">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input product_check" value="<?=$row['exam_name'];?>" id="exam_name"><?=$row['exam_name'];?>
                        </label>
                    </div>
                </li>
                <?php } ?>
                </div>
                <br>
            <div style="background-color:rgb(48,38,43);color:white;padding:5px;"><h6>Select subject</h6></div>
            <br>
            <ul class="list-group">
                <div style="height:180px;overflow-y:auto;overflow-x:hidden;">
                <?php
                $sql="SELECT DISTINCT subject FROM books ORDER BY subject";
                $result=$conn->query($sql);
                while($row=$result->fetch_assoc())
                {
                ?>
                <li class="list-group-item" style="background-color:rgb(239,227,243,0.7)">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input product_check" value="<?=$row['subject'];?>" id="subject"><?=$row['subject'];?>
                        </label>
                    </div>
                </li>
                <?php } ?>
                </div>
                <br>
                <div style="background-color:rgb(48,38,43);color:white;padding:5px;"><h6 >Select author</h6></div>
                <br>
            <ul class="list-group">
            <div style="height:180px;overflow-y:auto;overflow-x:hidden;">
                <?php
                $sql="SELECT DISTINCT author FROM books ORDER BY author";
                $result=$conn->query($sql);
                while($row=$result->fetch_assoc())
                {
                ?>
                <li class="list-group-item" style="background-color:rgb(239,227,243,0.7);">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input product_check" value="<?=$row['author'];?>" id="author"><?=$row['author'];?>
                        </label>
                    </div>
                </li>
                <?php } ?>
                </div>
            </ul>
            </ul>
            </div>
        <div class="col-lg-9 ">
        <br>
        <br>
            <div class="row" id="result" >
            <?php
                $sql="SELECT * FROM books";
                $result=$conn->query($sql);
                while($row=$result->fetch_assoc()){?>
                    <div class="col-md-3 mb-2">
                        <div class="card-deck" style=" height:600px;width:210px; color:white">
                            <div class="card border-secondary" style="background-color:rgb(48,38,43);height:500px;padding:10px;">
                            <div class="text-center" style="padding-top: 10px;">
                                    <img src=<?=$row['images'];?> class="card-img-top center " style="min-height:180px;width:90%;">
                                </div>
                                <div class="card-img-overlay">
                                    <h6  style="margin-top:10px;" class="text-light text-center rounded p-1"><b><?=$row['name'];?></b></h6>
                                </div>
                                <div class="card-body">
                                <br>
                                    <h4 class="card-title " style="color:rgb(239,227,243),font-size:5px;"><b>Price: </b><?= number_format($row['price']);?>/-</h4>
                                    <b><p>Author: </b><?= $row['author'];?></p>
                                    <b><p>Publisher: </b><?= $row['publisher'];?></p>
                                    <b><p>Subject: </b><?= $row['subject'];?></p>
                                    <a href=<?=$row['link'];?> style="color:white"> Click here to get the book on amazon</a>
                                    <br>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
</div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    $(".product_check").click(function()
    {
        var action='data';     
        var subject=get_filter_text('subject');
        var author=get_filter_text('author');
        var exam=get_filter_text('exam_name');
       
        $.ajax(
            {
                url:'book_query.php',method:'POST',data:{action:action,exam:exam,subject:subject,author:author},
                success:function(response)
                {
                    $('#result').html(response);
                    
                }
            }
        )
    });
    
   
    function get_filter_text(text_id)
    {
        var filterData=[];
        $('#'+text_id+':checked').each(function()
        {
            filterData.push($(this).val());
        });
        return filterData;
    }
});
</script>
</body>
</html> 