$(document).ready(function() {
    $("#loginForm").submit(function(event) {
        
        event.preventDefault();

        
        var formData = $(this).serialize();

        
        $.ajax({
            type: "POST",
            url: "PHP/login.php",
            data: formData,
            dataType: "json", 
            success: function(response) {
                if (response.login == 1) {
                    window.location.href = "./profile.html";

                } else {
                    alert("Invalid Username or Password");
                }
            },
            error: function(xhr, status, error) {
                console.error("Error:", error);
            }
        });
    });
});
