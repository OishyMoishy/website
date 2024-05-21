<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
        }
        .profile-info {
            margin-top: 20px;
            text-align: left;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }
        .profile-info p {
            margin-bottom: 10px;
        }
        .logout-btn {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #ff0000;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .logout-btn:hover {
            background-color: #cc0000;
        }
    </style>
</head>
<body>
    <?php
    // Start PHP session to access user data
    session_start();

    // Check if user is logged in
    if(isset($_SESSION['username'])) {
        echo "<h1>Welcome, " . $_SESSION['username'] . "!</h1>";
        echo "<div class='profile-info'>";
        echo "<p><strong>Username:</strong> " . $_SESSION['username'] . "</p>";
        echo "<form action='signuplogin.php' method='post'>";
        echo "<button type='submit' class='logout-btn'>Logout</button>";
        echo "</form>";

        echo "</div>";
    } else {
        // If user is not logged in, redirect them to the login page
        header("Location: login.php");
        exit();
    }
    ?>
</body>
</html>
