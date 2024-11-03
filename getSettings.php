<?php
session_start();

header('Content-Type: application/json');

$workTime = isset($_SESSION['workTime']) ? $_SESSION['workTime'] : 25;
$breakTime = isset($_SESSION['breakTime']) ? $_SESSION['breakTime'] : 5;

echo json_encode(array(
    'workTime' => $workTime,
    'breakTime' => $breakTime
));
?>