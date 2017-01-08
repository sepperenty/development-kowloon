(function(){

    var emailPresent = false;
    var messagePresent = false;

    $(".contact-email").focusout(function(){
        var inputEmail = $(".contact-email").val();
        if(inputEmail != ""){
            if(!validateEmail(inputEmail)){
                $("#emailValidationError").html(" ")
                $("#emailValidationError").html("This is not a valid email.")
            }else{
                emailPresent = true;
                $("#emailValidationError").html(" ")
            }
        }else {
            $("#emailValidationError").html("Please put your email here.")
        }

        checkIfvalid();

    });

    $(".contact-message").focusout(function(){
        var inputMessage = $(".contact-message").val();
        if(inputMessage == ""){
            $("#messageValidationError").html("Write a message")
            messagePresent = true;
        }else {
            $("#messageValidationError").html(" ")
        }
        checkIfvalid();
    });


    function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    function checkIfvalid(){
        if(emailPresent && messagePresent){
            $(".send-contact-form").prop('disabled', false);
        }else {
            $(".send-contact-form").prop('disabled', true);
        }
    }




})();