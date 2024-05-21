<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
        }
        button {
            padding: 15px 30px;
            font-size: 18px;
            background-color: #4CAF50; /* Green */
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #45a049; /* Darker Green */
        }
        button:focus {
            outline: none;
        }
        /* Style the form container to center the buttons */
        .form-container {
            display: flex;
            justify-content: center;
            margin-top: 20px; /* Add margin to separate buttons from text */
        }
        /* Style each form */
        form {
            margin-right: 20px;
        }
        input {
            padding: 10px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <h1>Registration</h1>
    <p>Please fill out the form below to create your account:</p>
    
    <!-- Registration Form -->
    <form id="registrationForm" onsubmit="return validateForm()" method="post" action="signupprocess.php">
        <input type="text" placeholder="Username" name="username" required><br>
        <input type="email" placeholder="Email" name="email" required><br>
        <input type="password" placeholder="Password" name="password" id="password" required><br>
        <input type="password" placeholder="Confirm Password" name="confirmPassword" id="confirmPassword" required><br>
       <button type="submit">Register</button>
    </form>

    <script>
        function validateForm() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmPassword").value;

            if (password != confirmPassword) {
                alert("Passwords do not match!");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
