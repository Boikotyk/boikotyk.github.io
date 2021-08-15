$("#contactForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Did you fill in the form properly?");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});
function formSuccess(){
    submitMSG(true, "Message Submitted!")
}

function submitForm(){
    //$( "#form-submit" ).prop( "disabled", true );
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();

    $.ajax({
        type: "POST",
        url: "php/form-process.php",
        data: "name=" + name + "&email=" + email + "&message=" + message,
        beforeSend: function() {                     
            $("#msgSubmit").html("Отправляем данные...");                   
        },                 
        success: function(text){                     
            /* В случае удачной обработки и отправки выполнится следующий код*/                     
            $('#msgSubmit').html(result);                     
            console.log("ntcn"); 
            $("#msgSubmit").html("Отправляем данные...");                
        }  
    });
}



function formError(){
    $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}