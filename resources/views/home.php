<?php include '../includes/header.php';

$activity_stmt = $connect->prepare("SELECT description, timestamp FROM activities WHERE user_id = ? ORDER BY timestamp DESC");
$activity_stmt->bind_param('i', $user_id);
$activity_stmt->execute();
$activity_result = $activity_stmt->get_result();

?>
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
<?php include '../includes/footer.php'?>
