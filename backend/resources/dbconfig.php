<?php

/* You should enable error reporting for mysqli before attempting to make a connection */
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
error_reporting(1);


$connect = new mysqli('localhost', 'root', '', 'planeapp');

/* Set the desired charset after establishing a connection */
$connect->set_charset('utf8mb4');