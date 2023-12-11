<?php
validate_Files();

?>

<?php

function validate_Files(){

    if(isset($_FILES['file'])){
        $file = $_FILES['file'];
        $title = $_POST['name'];
        if ( 0 < $_FILES['file']['error'] ) {
            echo 'Error: ' . $_FILES['file']['error'] . '<br>';
        }
        else {

            $picName  = $file['name'];
            $picDIR = $file['tmp_name'];
            $newDIR  = '../uploads/';
        
            move_uploaded_file($picDIR, $newDIR .  $picName);
            echo"uploaded";
        
            $path = $newDIR .  $picName;
            
            require "../config/connection.php";
            
            $command = "INSERT INTO project (projectname, projectcover) VALUES('$title','$path')";
            
            $conn -> query($command);
        
        }    
    }
    
   
    
}

?>