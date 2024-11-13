<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'test';

$connection = new mysqli($host, $user, $password, $database);

if ($connection->connect_error) {
    die("Connection Failed:" . $connection->connect_error);
}
else{
    // echo "Connection Successful!";
}
    