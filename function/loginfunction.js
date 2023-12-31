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
            $("#showpass p").text("");
            validpass = false;
        }
    });

   
    $("#loginbtn").on("click", function(){
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
                form_data.append('set', "1");  
                
                $.ajax({
                    url: '../components/database_code.php', 
                    dataType: 'json',  
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,                         
                    type: 'post',
                    success: function(response){
                        if(response == "false"){
                            $("#showemail p").css("color", "red");
                            $("#showemail p").text("Email does not exist...");
                            $("#showpass p").css("color", "red");
                            $("#showpass p").text("Invalid password");
                        }else if(response == "falsepass"){
                            $("#showpass p").css("color", "red");
                            $("#showpass p").text("Wrong password");
                        }
                        else if(response == "true"){
                            alert("Login Successfully");
                            window.location.href="dashboard.php";
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