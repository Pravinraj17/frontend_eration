<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation Success</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js"></script>
    <style>


        }
    </style>
</head>
<body>

<form id="myForm">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" class="success-message" required>
    <!-- <span id="username-success" class="success-message" style="display:none;">Valid!</span><br><br> -->
    
    <input type="submit" value="Submit">
</form>

<script>
$(document).ready(function() {
    $("#myForm").validate({
        rules: {
            username: {
                required: true,
                minlength: 3
            }
        },
        messages: {
            username: {
                required: "Please enter a username",
                minlength: "Your username must be at least 3 characters long"
            }
        },
        success: function(input, element) {
            $(element).next(".success-message").show(); // Show the success message
        },
        errorPlacement: function(error, element) {
            error.insertAfter(element); // Place the error message after the input
            $(element).next(".success-message").hide(); // Hide the success message if there is an error
        }
    });
});
</script>

</body>
</html>

