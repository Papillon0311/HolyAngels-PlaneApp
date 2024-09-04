<?php
session_start(); 

require_once '../resources/dbconfig.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); 
    exit();
}

$user_id = $_SESSION['user_id'];

// Fetch user data
$stmt = $connect->prepare("SELECT username FROM users WHERE id = ?");
$stmt->bind_param('i', $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "User not found.";
    exit();
}

// Fetch activities
$activity_stmt = $connect->prepare("SELECT description, timestamp FROM activities WHERE user_id = ? ORDER BY timestamp DESC");
$activity_stmt->bind_param('i', $user_id);
$activity_stmt->execute();
$activity_result = $activity_stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Welcome, <?php echo htmlspecialchars($user['username']); ?>!</h1>

        <h2>Recent Activity</h2>
        <ul>
            <?php while ($activity = $activity_result->fetch_assoc()): ?>
                <li><?php echo htmlspecialchars($activity['description']); ?> (<?php echo htmlspecialchars($activity['timestamp']); ?>)</li>
            <?php endwhile; ?>
        </ul>

        <a href="logout.php" class="btn btn-danger">Log Out</a>
    </div>
</body>
</html>
