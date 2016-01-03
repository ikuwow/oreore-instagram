<?php
require './_config.php';
$token = [
    'token' => isset($_SESSION['access_token']) ? $_SESSION['access_token'] : null
];

header('Content-Type: application/json; charset=utf8');
echo json_encode($token);
exit;
