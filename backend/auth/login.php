<?php

require_once '../resources/dbconfig.php';

$stmt = $connect->prepare("SELECT id FROM users WHERE username = ? AND `password` = ? ");
$stmt->bind_param('ss', $_POST['username'], $_POST['password']);
$stmt->execute();

$result = $stmt->get_result();

$auth = $result->num_rows;

if($auth > 0){
    echo 'login here';
}else{
    echo 'no result here';
}