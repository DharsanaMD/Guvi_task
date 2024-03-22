$(document).ready(function() {
   
    $.ajax({
        type: "GET",
        url: "PHP/profile.php",
        dataType: "json", 
        success: function(userData) {
            console.log(userData);
          
            var profileDetailsHtml = "<p><strong>Username:</strong> " + userData.username + "</p>";
            profileDetailsHtml += "<p><strong>Email:</strong> " + userData.email + "</p>";
            profileDetailsHtml += "<p><strong>Age:</strong> " + userData.age + "</p>";
            profileDetailsHtml += "<p><strong>Gender:</strong> " + userData.gender + "</p>";
            profileDetailsHtml += "<p><strong>Languages Known:</strong> " + userData.languages + "</p>";
            profileDetailsHtml += "<p><strong>Date of Birth:</strong> " + userData.dob + "</p>";
            profileDetailsHtml += "<p><strong>Address:</strong> " + userData.address + "</p>";
            profileDetailsHtml += "<p><strong>About:</strong> " + userData.about + "</p>";
            $("#profileDetails").html(profileDetailsHtml);
        
    },
        error: function(xhr, status, error) {
            console.error("Error:", error);
        }
    });
});
