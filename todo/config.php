<?php
$db_host = getenv('DB_HOST') ?: 'db'; // Use container name or default to 'db'
$db_user = getenv('DB_USER') ?: 'your_db_user'; // Use env variables or default values
$db_pass = getenv('DB_PASS') ?: 'your_db_password';
$db_name = getenv('DB_NAME') ?: 'todo';

$db = new mysqli($db_host, $db_user, $db_pass, $db_name) or die("Connection failed: " . $db->connect_error);
?>