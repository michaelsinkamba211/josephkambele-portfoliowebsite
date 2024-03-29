$(document).ready(function() {
    $("#submit").click(function() {
        var name = $("#name").val();
        var email = $("#email").val();
        var subject = $("#subject").val();
        var message = $("#message").val();
        var dataString = 'name=' + name + '&email=' + email + '&subject=' + subject + '&message=' + message;
        if (name == '' || email == '' || subject == '' || message == '') {
            $("#display").html("<div class='alert alert-warning'>Please fill all fields.</div>");
        } else {
            $.ajax({
                url: "contact.php",
                type: "POST", // Specify the HTTP method
                data: dataString,
                cache: false,
                success: function(result) {
                    $("#display").html(result);
                }
            });
        }
        return false;
    });
});
