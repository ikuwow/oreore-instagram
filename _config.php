<?php

require_once './vendor/autoload.php';

session_start();
$instagram_keys = require('./_apikeys.php');

$provider = new League\OAuth2\Client\Provider\Instagram([
    'clientId' => $instagram_keys['clientId'],
    'clientSecret' => $instagram_keys['clientSecret'],
    'redirectUri' => 'http://localhost:8118/login.php'
]);

$isLoggedIn = isset($_SESSION['access_token']) ? true : false;
