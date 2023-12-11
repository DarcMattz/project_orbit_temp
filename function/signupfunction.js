$(document).ready(function () {
    var validemail, validpass = false;

    $("#email").on("keyup", function () {
        var emailval = $("#email").val();
        
        if(validateEmail(emailval) && emailval != ""){
            $("#showemail p").css("color", "green");
            $("#showemail p").text('Valid email..');
            validemail =true;
        }else{
            $("#showemail p").css("color", "red");
            $("#showemail p").text("Invalid email...");
            validemail =false;
        }
        
    });

               
    $("#pass").on("keyup", function () {
        var passval = $("#pass").val();
                
        if(validatePass(passval)){
            $("#showpass p").css("color", "green");
            $("#showpass p").text('strong password');
            validpass =true;
        }else{
            $("#showpass p").css("color", "red");
            $("#showpass p").text("Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character");
            validpass = false;
        }
    });

   
    $("#signup_btn").on("click", function(){
            if(!validemail){
                $("#showemail p").css("color", "red");
                $("#showemail p").text("Invalid email...");
                
            }else if(!validpass){
                $("#showpass p").css("color", "red");
                $("#showpass p").text("Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character");
            }else{

                var emailval = $("#email").val();
                var passval = $("#pass").val();
                var form_data = new FormData();                  
                form_data.append('email', emailval);    
                form_data.append('pass', passval);  
                form_data.append('sign', "1");  
                
             
            
                $.ajax({
                    url: '../components/database_code.php', 
                    dataType: 'json',  
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,                         
                    type: 'POST',
                    success: function(response){
                        if(response == "emailfalse"){
                            $("#showemail p").css("color", "red");
                            $("#showemail p").text("Email has already taken...");
                            $("#showpass p").css("color", "green");
                        }
                        else if(response == "emailtrue"){
                            alert("Signup Successfully");
                            window.location.href="login.php";
                        }
                        
                    }
                });
            }
        });

});

function validateEmail(email){

        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        return emailReg.test(email);

}

function validatePass(pass){

    var passReg = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
    return passReg.test(pass);

}