<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'database.php';

if(isset($_POST['submit']))
{
    $uname = $_POST['uname'];
    $password = $_POST['password'];

    // Use prepared statement to prevent SQL injection and hash password
    $sql = "SELECT * FROM users WHERE username=?"; // Use placeholder
    $stmt = mysqli_stmt_init($con);
    if(mysqli_stmt_prepare($stmt, $sql))
    {
        mysqli_stmt_bind_param($stmt, "s", $uname);// Bind username only
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        // Check if any rows were returned
        if($row = mysqli_fetch_assoc($result))
        {
            // Verify password
            if(password_verify($password, $row['password']))
            {
                // Start session and store user data
                session_start();
                $_SESSION['username'] = $uname;
                
                // Redirect to profile page
                header("Location: dashboard.php");
                exit();
            }
            else
            {
                // Display error message for incorrect credentials
                header("Location: login.php?error=incorrect");
                exit();
            }
        }
        else
        {
            // Display error message for incorrect username
            header("Location: login.php?error=incorrect");
            exit();
        }
    }
    else
    {
        // Display error message for SQL error
        header("Location: login.php?error=sql");
        exit();
    }

    mysqli_stmt_close($stmt);
    mysqli_close($con);
}
?>
