<link rel="stylesheet" href="style.css">
<?php
$conn=new mysqli("localhost","root","","dbms_project");
if($conn->connect_error)
{
    die("Failed to connect!".$conn->connect_error);
}

?>
<body style="background:url('final_main.jpg');">
<nav id="navbar">
        <div class="container">
        <h1 style="text-align:center">COLLEGES</h1>
                <ul>
                    <li><a href="exams.php">Back</a></li>
                </ul>
        </div>
    </nav>
<br>
<h2 style="text-align:center"><b>The Top 5 colleges for <?= $_POST['search'];?> are:</b></h2>
<?php
$x=$_POST['search'];
$sql="SELECT eligible from college cross join exam on college.college_id=exam.college_id where exam_name=$x";
$result=$conn->query($sql);
echo $result;
?>
</body>

<?php
if(isset($_POST['submit']))
{
    $data=$_POST['search'];
    $sql ="SELECT * from college CROSS JOIN college_ranking on college.college_id = college_ranking.college_id CROSS JOIN exam on exam.exam_id = college.exam_id where exam.exam_name = '$data' AND college_ranking.ranking_year='2020' ORDER by college_ranking.nirf_rank asc ";

    $result=$conn->query($sql);
    $output='';
    while($row=$result->fetch_assoc())
    {
        $output.='   
        <table style="height:100px;width:400px;background-color:rgb(48,38,43);color: rgb(239,227,243,0.9);margin-left: auto;margin-right: auto;">
        <tr>
            <td>College Name:'. $row['name'].'</td>
            <br>
        </tr>
        <tr>
        <td><a href='.$row['link'].' style="color:white">Click here to explore the college website</a></td>
        </tr>
        </table>
        ';
    }
    echo $output;
}
?>
