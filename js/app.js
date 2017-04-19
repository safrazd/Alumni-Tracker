$(document).ready(function(){

    $("#signupBtn").click(function(){
        var data = {
            fname: $("#fname").val(),
            lname: $("#lname").val(),
            email: $("#email").val(),
            graduated: $("#graduated").val(),
            degree: $("#degree").val(),
            password: $("#password").val(),
        };
        $.post("", data, function(response) {
            response = JSON.parse(response);
            if(response.status == "success"){
                window.location.href = "";
            }else{
                alert("error");
            }
        });
    });

    //Function Runs when the button is clicked
    $("#loginBtn").click(function(){
        //grabs data from the form elements
        var data = {
            username: $("#username").val(),
            password:  $("#password").val()
        };
        $.post(, data, function(response) {
            console.log(response);
            response = JSON.parse(response);
            console.log(response);
            if(response.status == "success"){
                window.location.href = "";
                localStorage.setItem("", response.userid);
            }else{
                alert("Invalid Login");
            }

        });
    });
});