<?php 
$exam_arr=array();
$books_arr=array();
if(isset($_POST["submit"]))
{
    $email = $_POST["email"];
    if(!empty($_POST["book"]) )
    {
        foreach($_POST["book"] as $language)
        {
            list($book_id,$exam_id) = explode('|', $language);
            array_push($exam_arr,$exam_id);
            array_push($books_arr,$book_id);
        }
    }
    else{
        echo 'Please select one';
    }
}

//database connection
$conn=new mysqli('localhost','root','','dbms_project');
if($conn->connect_error)
{
    die('connection failed');
}
else{
    $length = count($books_arr);
    for($i = 0; $i < $length; $i++){
        $stmt=$conn->prepare("insert into survey(email,exam_id,book_id)values(?,?,?)");
        $stmt->bind_param("sii",$email,$exam_arr[$i],$books_arr[$i]);
        $stmt->execute();
        $stmt->close();

    }
    $sql1=$conn->query("Update prepares1 set rating = (Select cnt from ( select email, exam_id, book_id, count(book_id) as cnt from survey group by exam_id, book_id order by exam_id, cnt desc) as b where b.cnt > 2 and prepares1.bookid = b.book_id and prepares1.exam_id = b.exam_id);");
    $conn->close();
}

echo 'Thank you so much for filling our survey ';
echo '.Redirecting to the home page in 3s..';
header( "refresh:3;url=index.php" );
?>