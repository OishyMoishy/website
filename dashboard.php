<?php
session_start();
include 'db.php';

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$user_id = $_SESSION['user_id'];

// Fetch past meetings from the database
$stmt = $conn->prepare('SELECT meeting_date, doctor_name, meeting_time FROM zoom_meetings WHERE user_id = ? AND meeting_date < CURDATE()');
$stmt->bind_param('i', $user_id);
$stmt->execute();
$result = $stmt->get_result();
$meetings = $result->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="stylee.css">
</head>
<body>
    <div class="container">
        <nav class="sidebar">
            <ul>
                <li><a href="dashboard.php">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Address</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Appoint a Doctor</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
        <main>
            <header class="header">
                <h1>Medicare</h1>
            </header>
            <section class="meetings">
                <?php if (count($meetings) > 0): ?>
                    <?php foreach ($meetings as $meeting): ?>
                        <div class="meeting-card">
                            <h2>Dr. <?php echo htmlspecialchars($meeting['doctor_name']); ?></h2>
                            <p>Date: <?php echo htmlspecialchars($meeting['meeting_date']); ?></p>
                            <p>Time: <?php echo htmlspecialchars($meeting['meeting_time']); ?></p>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>You joined zero meetings.</p>
                <?php endif; ?>
            </section>
        </main>
    </div>
</body>
</html>
