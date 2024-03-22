$(document).ready(function() {
    $("#registrationForm").submit(function(event) {
       
        event.preventDefault();

   
        var formData = $(this).serialize();

        
        $.ajax({
            type: "POST",
            url: "PHP/register.php",
            data: formData,
            dataType: "json", 
            success: function(response) {
                if (response.success == 1) {
                    window.location.href = "./login.html";
                } else if (response.user == 1) {
                    alert("Username already exists. Please try again with another username!");
                }
            },
            error: function(xhr, status, error) {
                console.error("Error:", error);
            }
        });
    });
});
