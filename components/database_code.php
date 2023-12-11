<?php
validate_Files();
if(isset($_POST['set'])){
echo json_encode(validate_login());
}

if(isset($_POST['sign'])){
echo json_encode(validate_signup());
}
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
            $pass = hash("sha256", $_POST['pass']);

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
                        return "falsepass";
                    }
                } 

            }
            $result -> free();
            $conn -> close();
            
            if($verify){
                return "true";
            }else{
                return "false";
            }
           }
    
    }
    
}

function validate_signup(){

    if(isset($_POST['sign'])){

            $email = $_POST['email'];
            $pass = hash("sha256", $_POST['pass']);

            require "../config/connection.php";
            
            $command = "SELECT * FROM user WHERE email = '".trim($email)."'";

           $result = $conn -> query($command);

           if($result ->num_rows > 0){
            while($data = $result -> fetch_assoc()){
                    $result -> free();
                    return "emailfalse";
            }
           }else{
            $num = randomWithLength(2);
            $command = "INSERT INTO user (username, email, password, role) VALUES('User$num', '$email', '$pass', 'admin')";
            $conn -> query($command);
            $conn -> close();

            return "emailtrue";
           }
    
    }
    
}


function randomWithLength($length){

  $number = '';
  for ($i = 0; $i < $length; $i++){
      $number .= rand(0,9);
  }

  return (int)$number;

}

?>


