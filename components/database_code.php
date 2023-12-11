<?php
validate_Files();
echo validate_login();
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


// LOG IN

function validate_login(){

    if(isset($_POST['set'])){

            $email = $_POST['email'];
            $pass = $_POST['pass'];

            $verify = false;
            require "../config/connection.php";
            
            $command = "SELECT * FROM user WHERE role = 'admin'";

           $result = $conn -> query($command);
           if($result ->num_rows > 0){
            while($data = $result -> fetch_assoc()){

                if(trim($data['email']) == trim($email)){
                    if(trim($data['password']) == trim($pass)){
                        $verify = true;
                    }else{
                        return "Incorrect password";
                    }
                } 

            }
            $result -> free();
            $conn -> close();
            if($verify){
                return "Successfully log in";
            }else{
                return "User not exist";
            }
           }
    
    }
    
}



?>