$(document).ready(function(){

    $("#nameerror").hide();
    $("#specializationerror").hide();
    $("#emailerror").hide();
    $("#numbererror").hide();
    $("#deserroer").hide();

    $("#name").focusout(function(){
        checkName();
    });
    $("#specialization").focusout(function(){
        checkCourse();
    });
    $("#email").focusout(function(){
        checkEmail();
    });
    $("#number").focusout(function(){
        checkNumber();
    });
    $("#description").focusout(function(){
        checkDescription();
    }
    );


    var nameError = false;
    var courseError = false;
    var emailError = false;
    var numberError = false;
    var descriptionError = false;



    function checkName(){
        var pattern = /^[a-zA-Z]*$/;
        var name = $("#name").val();

        if(pattern.test(name) && name!== ""){
            $("#nameerror").hide();
            $("#name").css("border-bottom", "2px solid #34F458");
            nameError = false;
        }
        else{
            $("#nameerror").html("Please enter a valid name");
            $("#nameerror").show();
            $("#name").css("border-bottom", "2px solid #F90A0A");
            nameError = true;
        };

    }

    function checkCourse(){
        var pattern = /^[a-zA-Z]*$/;
        var course = $("#course").val();

        if(pattern.test(course) && course!== ""){
            $("#courseerror").hide();
            $("#course").css("border-bottom", "2px solid #34F458");
            courseError = false;
        }
        else{
            $("#courseerror").html("Please enter a valid course name");
            $("#courseerror").show();
            $("#course").css("border-bottom", "2px solid #F90A0A");
            courseError = true;
        };

    };

    function checkEmail(){
        var pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        var email = $("#email").val();

        if(pattern.test(email) && email!== ""){
            $("#emailerror").hide();
            $("#email").css("border-bottom", "2px solid #34F458");
            emailError = false;
        }
        else{
            $("#emailerror").html("Please enter a valid email address");
            $("#emailerror").show();
            $("#email").css("border-bottom", "2px solid #F90A0A");
            emailError = true;
        };

    };

    function checkNumber(){
        var pattern = /^[0-9]*$/;
        var number = $("#number").val();

        if(pattern.test(number) && number!== ""){
            $("#numbererror").hide();
            $("#number").css("border-bottom", "2px solid #34F458");
            numberError = false;
        }
        else{
            $("#numbererror").html("Please enter a valid phone number");
            $("#numbererror").show();
            $("#number").css("border-bottom", "2px solid #F90A0A");
            numberError = true;
        };

    };

    function checkDescription(){
        var pattern = /^[a-zA-Z0-9., ]*$/;
        var description = $("#description").val();

        if(pattern.test(description) && description!== ""){
            $("#descriptionerror").hide();
            $("#description").css("border-bottom", "2px solid #34F458");
            descriptionError = false;
        }
        else{
            $("#descriptionerror").html("Please enter a valid description");
            $("#descriptionerror").show();
            $("#description").css("border-bottom", "2px solid #F90A0A");
            descriptionError = true;
        };

    };




    $("#form").submit(function(e){
        checkName();
        checkCourse();
        checkEmail();
        checkNumber();
        checkDescription();
    
        if (nameError || courseError || emailError || numberError || descriptionError) {
            e.preventDefault();
            alert("Please fix the errors in the form before submitting.");
        }
        
    });
    

});


console.log("Registration script loaded successfully.");