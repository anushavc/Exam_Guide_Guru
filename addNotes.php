<?php

function addNotes($text, $userID){

if(isset($_REQUEST["update"])){
    $con = mysqli_connect("localhost", "root", "", "dbms_project");
    $text = mysqli_escape_string($con, $_REQUEST['text']);  
    $result = mysqli_query($con, "update notes set text = '$text' where userID = '$userID'");
    
}

?>

<div class = 'card'>  
<?php
        $con = mysqli_connect("localhost", "root", "", "dbms_project");
        $sql = "select text from notes where userId = '$userID'";
        $result = mysqli_query($con,$sql);
        $num_of_rows = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);
        if($num_of_rows>0){
            
            $text = $row['text'];
         
        }
        else{
            mysqli_query($con, "insert into notes values ('$userID', '$text')");
            $text = '';
 
        }
        
        
    ?>
    
                <form method = "post" action = "notes.php">
                <div>
                
                <textarea name = "text" class = "textarea"><?php echo $text?></textarea>
                
                </div>
                <button name = "update" class = "update-btn">Update</button>
                </form>
    <?php  ?>
    
<?php
} 
?>


