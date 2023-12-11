
$(document).ready(function(){
    firstload ();
    onSidebarButtons();
    createBoard ("#create-card","#modal-createBoard");
    cancelButton("#cancel-create", "#modal-createBoard");
    displayImage();

    $(this).on("click", "#createbutton", function(){

        var file_data = $('#select-image').prop('files')[0];   
        var title =  $("#projecttitle").val();
        var form_data = new FormData();                  
        form_data.append('file', file_data);    
        form_data.append('name', title);  
        
        

        $.ajax({
            url: '../components/database_code.php', 
            dataType: 'text',  
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,                         
            type: 'post',
            success: function(php_script_response){
                firstload ();
                backButton("#modal-createBoard");
            }
         });


    });

});


function firstload () { 
    $("#board").remove();
    $.ajax({
        type: "POST",
        url: "../components/board.php",
        success: function (response) {
            $("#body-contents").append(response);
        }
    });

 }


function displayImage()
{
    $(document).on("change", "#select-image", function(event){
        $('#show-image').attr('src', URL.createObjectURL(event.target.files[0]));
    });
}



 function onSidebarButtons()
 {
    $(document).on("click","#board-btn",function () { 
        $("#board-btn").removeClass("selected-btn");
        $("#member-btn").removeClass("selected-btn");
        $("#calendar-btn").removeClass("selected-btn");

       $("#member-btn").addClass("btn2");
       $("#calendar-btn").addClass("btn3");


       $("#board-btn").removeClass("btn1");
       $("#board-btn").addClass("selected-btn");
        
       $("#board").remove();
       loadBoards();
    });


    $(document).on("click","#member-btn", function(){
        
       $("#board-btn").removeClass("selected-btn");
       $("#member-btn").removeClass("selected-btn");
       $("#calendar-btn").removeClass("selected-btn");

       $("#board-btn").addClass("btn1");
       $("#calendar-btn").addClass("btn3");

       $("#member-btn").removeClass("btn2");
       $("#member-btn").addClass("selected-btn");

       loadMembers();
    });


    $(document).on("click","#calendar-btn",function(){

        $("#board-btn").removeClass("selected-btn");
        $("#member-btn").removeClass("selected-btn");
        $("#calendar-btn").removeClass("selected-btn");

        $("#board-btn").addClass("btn1");
        $("#member-btn").addClass("btn2");
 
        $("#calendar-btn").removeClass("btn3");
        $("#calendar-btn").addClass("selected-btn");


        loadCalendar();
    });
 }


 function createBoard (btnID, modalID) {
    $(document).on("click",btnID,function(){
        $(modalID).fadeIn("slow");
        $(modalID).removeClass("hide-modal");
        $(modalID).addClass("show-modal");
    });
}

function cancelButton(btnID, modalID) { 
    $(document).on("click",btnID,function(){
        $(modalID).fadeOut(300);
        // $(modalID).removeClass("show-modal");
        // $(modalID).addClass("hide-modal");
    });
}


function backButton(modalID) { 
        $(modalID).fadeOut(300);
}


 function loadBoards()
 {
    $("#board").remove();
    $("#member").remove();
    $("#calendar").remove();

    $.ajax({
        type: "POST",
        url: "../components/board.php",
        success: function (response) {
            $("#board").remove();
            $("#members").remove();
            $("#calendar").remove();
            $("#body-contents").append(response);
        }
    });
 }

 function loadMembers()
 {
    $("#board").remove();
    $("#member").remove();
    $("#calendar").remove();

    $.ajax({
        type: "POST",
        url: "../components/member.php",
        success: function (response) {
            $("#board").remove();
            $("#members").remove();
            $("#calendar").remove();

            $("#body-contents").append(response);
        }
    });
 }

 function loadCalendar()
 {
    $("#board").remove();
    $("#member").remove();
    $("#calendar").remove();
    $.ajax({
        type: "POST",
        url: "../components/calendar.php",
        success: function (response) {
            
            $("#board").remove();
            $("#members").remove();
            $("#calendar").remove();
            
            $("#body-contents").append(response);
        }
    });
 }