<?php

$element='';
$con = mysqli_connect("localhost", "root", "", "dbms_project");



function component($bookName, $productimage, $price,$author, $link, $user_id, $bookID){

    $_SESSION['user_id'] = $user_id;
    


?>
  
            <div class = 'card'>  
                <div class = 'image'> 
                    <img src = '../<?php echo $productimage ?>' name = 'productimage'> 
                </div> 
                <div class = 'book-details'>
                    <div class = 'bookName'><?php echo $bookName ?></div>
                    <div class = 'author'> <?php echo $author ?></div>
                    <div class = 'price'>
                      Rs. <?php echo $price ?>/-
                    </div>
                    <div>
                    <a class = 'book-link' href = '<?php echo $link ?>'>Click here to get the book on amazon</a>

                <form>
                    
                    </div>
               
                </div>                 
            </div>
            
<?php       
}
?>