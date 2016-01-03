<?php
require_once './_config.php';
session_destroy();
header('Location: ' . '/');
exit;
