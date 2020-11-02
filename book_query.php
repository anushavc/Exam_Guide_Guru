<?php 
require('config.php');

if(isset($_POST['action'])){
    

    if(isset($_POST['exam']) )
    {
        $sql=" SELECT *, IF(rating != '', 'Recommended',' ' ) as r3 from exam CROSS JOIN prepares1 ON exam.exam_id=prepares1.exam_id CROSS JOIN books on books.bookID=prepares1.bookID ";	
        
        
        $examname=implode("','",$_POST['exam']);
        $sql .="AND exam_name IN('".$examname."')";

        
        if(isset($_POST['subject']))
        {
            $subject=implode("','",$_POST['subject']);
            $sql .="AND subject IN('".$subject."')";
            
        }

        if(isset($_POST['author']))
        {
            $author=implode("','",$_POST['author']);
            $sql .="AND author IN('".$author."')";
            
        }

        
        

        

    }elseif(isset($_POST['subject'])) 
    
    {

        $sql="SELECT *, '' as r3 FROM books  WHERE subject!='' AND author!=''";

        if(isset($_POST['subject']))
        {
            $subject=implode("','",$_POST['subject']);
            $sql .="AND subject IN('".$subject."')";
            
        }

        if(isset($_POST['author']))
        {
            $author=implode("','",$_POST['author']);
            $sql .="AND author IN('".$author."')";
            
        }

    }elseif(isset($_POST['author']))
    {
        $sql="SELECT *, '' as r3 FROM books  WHERE subject!='' AND author!=''";
        if(isset($_POST['author']))
        {
            $author=implode("','",$_POST['author']);
            $sql .="AND author IN('".$author."')";
            
        }

    }else{

        $sql="SELECT *,'' as r3 from books";

    }





  


    $result= $conn->query($sql);
    $output='';
    if( isset($result->num_rows) && $result->num_rows >=0)
    {
        while($row=$result->fetch_assoc())
        {
            $output .='   
            <div class="col-md-3 mb-2">
                        <div class="card-deck" style=" height:600px;width:230px; color:white">
                            <div class="card border-secondary" style="background-color:rgb(48,38,43);height:500px;">
                            <div class="text-center" style="padding-top: 10px;">
                                    <img src="'.$row['images'].'" "="card-img-top center " style="min-height:180px;width:90%;">
                                </div>
                                <div class="card-img-overlay">
                                    <h6  style="margin-top:10px;" class="text-light text-center rounded p-1"><b>'.$row['name'].'</b></h6>
                                </div>
                                <br>
                                <div class="card-body">
                                    <h4 class="card-title text-danger">Price:'. number_format($row['price']).'/-</h4>
                                    <b><p>Author:</b>'. $row['author'].'</p>
                                    <b><p>Publisher:</b>'.$row['publisher'].'</p>
                                    <b><p>Subject:</b>'.$row['subject'].'</p>
                                    <a href='.$row['link'].' style="color:white"> Click here to get the book on amazon</a>
                                    <br>
                                    <p style="font-size:23px;text-align:center;background-color:rgb(239,227,243);color:rgb(48,38,43)"><b> '.$row['r3'].'</b></p>
        
                            </div>
                        </div>
                    </div>
                </div>
           ';
        }
    }echo $output;
}

?>
