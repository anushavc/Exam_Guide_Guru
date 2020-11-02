<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>EXAMS</title>
</head>
<nav id="navbar">
                <h1 class="logo"> <i class="fas fa-book"></i> Exam Guide Guru</h1>
                <ul>
                    <li><a href="index.php">Back</a></li>
                </ul>
    </nav>
<body style= "background-color:rgb(48,38,43);">
    <div class="h-100 row align-items-center">
    <div class="container"> 
        <div class="row">
            <div class="col-md-8 offset-md-2 p-4 mt-3 rounded" style="background-color:rgb(48,38,43);">
                <h4 class="text-center font1" style="color:rgb(239,227,243)"> SEARCH FOR ELIGIBLE COLLEGES</h4>
                <form autocomplete="off" action="details.php" method="post" class="form-inline p-3 " style="background-color:rgb(239,227,243);">
                <input type="text" name="search" id="search" class="form-control form-control-lg rounded-0" placeholder="" style="width:80%;background-color:rgb(239,227,243,0.7);border-color:rgb(48,38,43);">
                <input type="submit" name="submit" value="Search" class="btn btn-info btn-lg rounded-0 " style="width:20%;background-color:rgb(48,38,43);">
            </form>
        </div>
        </div>
        <div class="col-md-5" style="postion:relative;margin-top:-38px;margin-left:215px;">
        <div class="list-group background-color:rgb(239,227,243);" id="show-list" style=" background-color:rgb(239,227,243);">
            
        </div>
    </div>
</div>

    <script type="text/javascript">
    $(document).ready(function()
        {
            $("#search").keyup(function()
            {
                var searchText=$(this).val();
                if(searchText!='')
                {
                    $.ajax({
                        url:'exam_query.php',method:'post',data:{query:searchText},success:function(response)
                        {
                            $("#show-list").html(response); 
                        }
                    });
                }
                else
                {
                    $("#show-list").html('');
                }
            });
            $(document).on('click','a',function()
            {
                $("#search").val($(this).text());
                $("#show-list").html('');
            });
        });
    </script>
</body>
</html>