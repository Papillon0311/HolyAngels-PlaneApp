<?php

include '../resources/dbconfig.php';

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');


$stmt = $connect->prepare("SELECT * FROM users WHERE username = ? AND `password` = ? ");
$stmt->bind_param('ss', $_POST['username'], $_POST['password']);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo 'No user found.';
    exit();
}

$user = $result->fetch_assoc();

if ($password == $user['password']) {
    session_start();
    ob_start();
    $_SESSION['userid'] = $user['id'];
    // echo $_SESSION['userid'];
    header('Location: /resources/views/home.php');
} else {
    echo 'Invalid password.';
}

$stmt->close();
$connect->close();
