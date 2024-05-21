<?php
// Include the database connection file
include 'database.php';

// Check if the form was submitted
if(isset($_POST['username'], $_POST['email'], $_POST['password'])) {
    // Retrieve form data
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Construct SQL query
    $sql = "INSERT INTO userlogin (username, email, password) VALUES ('$username', '$email', '$password')";

    // Execute SQL query
    if(mysqli_query($con, $sql)) {
        // Start PHP session
        session_start();

        // Store user data in session variables
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;

        // Redirect user to profile page
        header("Location: profile.php");
        exit();
    } else {
        // Error inserting data
        echo "Error: " . mysqli_error($con);
    }
} else {
    // Form not submitted
    echo "Form not submitted.";
}

// Close database connection
mysqli_close($con);
?>
