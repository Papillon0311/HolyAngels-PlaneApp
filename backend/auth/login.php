<?php
session_start();

require_once '../resources/dbconfig.php';

$stmt = $connect->prepare("SELECT id, username FROM users WHERE username = ? AND `password` = ?");
$stmt->bind_param('ss', $_POST['username'], $_POST['password']);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {

    $user = $result->fetch_assoc();
    
    // Store user ID in session
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];

    header("Location: dashboard.php");
    exit();
} else {
    echo 'Invalid password or username';
}
