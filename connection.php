<?php
$host = 'localhost';
$username = 'id22016676_janet';
$password = 'Lamley@12345';
$database = 'id22016676_wellness_nest';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
