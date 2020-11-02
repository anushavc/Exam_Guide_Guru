<?php
$conn=new mysqli("localhost","root","","dbms_project");
if($conn->connect_error)
{
    die("Failed to connect".$conn->connec_error);
}
if(isset($_POST['query']))
{
    $input=$_POST['query'];
    $query="SELECT exam_name FROM exam WHERE exam_name LIKE '%$input%'";
    $result=$conn->query($query);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc()){
            echo"<a href='#' class='list-group-item list group-item-action border-1' style='background-color:rgb(48,38,43,0.1);color:black;'>".$row['exam_name']."</a>";
        }
    }
    else
    {
        echo "<p class='list-group-item border-1'> No record of exam name</p>";
    }
}
?>