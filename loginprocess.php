<?php
include 'database.php';

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    // Query the database
    $sql = "SELECT * FROM appoint WHERE name='$name' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    // Check if there is a matching row
    if(mysqli_num_rows($result) > 0) {
        // Start session and store user data
        session_start();
        $_SESSION['name'] = $name;

        // Redirect to welcome page
        header("Location: dashboard.php");
        exit();
    } else {
        echo "<script>alert('Wrong name and password')</script>";
    }
}
?>
