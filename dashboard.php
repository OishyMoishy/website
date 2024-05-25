<?php
session_start();
include 'database.php';

if (!isset($_SESSION['name'])) {
    header("Location: login.php");
    exit();
}

$name = $_SESSION['name'];

$sql = "SELECT * FROM zoom WHERE name=?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $name);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$appointment = mysqli_fetch_assoc($result);

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .container {
            display: flex;
            width: 100%;
        }

        nav {
            width: 250px;
            background: #2c3e50;
            color: white;
            height: 100%;
            padding-top: 30px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            margin: 20px 0;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            padding: 15px 20px;
            display: flex;
            align-items: center;
            transition: background 0.3s;
        }

        nav ul li a:hover {
            background: #34495e;
        }

        nav ul li a .nav-item {
            margin-left: 10px;
        }

        .right-section {
            flex: 1;
            padding: 40px;
            background: #ecf0f1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .welcome-message {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            text-align: center;
        }

        .card h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .card p {
            margin: 10px 0;
            color: #555;
        }

        .zoom-link {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .zoom-link:hover {
            background: #2980b9;
        }
    </style>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="image/logo.jpg" alt="Logo" style="width: 40px; height: 40px; border-radius: 50%;">


          <span class="nav-item">Medi Care</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-home"></i>
          <span class="nav-item">Home</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-user"></i>
          <span class="nav-item">Profile</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-question-circle"></i>
          <span class="nav-item">Help</span>
        </a></li>
        <li><a href="logout.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>
    
    <div class="right-section">
      <div class="welcome-message">
        Welcome, <?= htmlspecialchars($name) ?>!
      </div>
      <?php if ($appointment): ?>
      <div class="card">
        <h2>Appointment Details</h2>
        <p><span class="doctor-name"><?= htmlspecialchars($appointment['doctor_name']) ?></span></p>
        <p class="date-time">Date: <?= htmlspecialchars($appointment['date']) ?></p>
        <p class="date-time">Time: <?= htmlspecialchars($appointment['start_time']) ?></p>
        <p><a href="<?= htmlspecialchars($appointment['meeting_link']) ?>" class="zoom-link">Zoom Link</a></p>
      </div>
      <?php else: ?>
      <div class="card">
        <h2>No Appointment Found</h2>
      </div>
      <?php endif; ?>
    </div>
  </div>
</body>
</html>
