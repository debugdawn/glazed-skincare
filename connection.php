<?php
$host = 'localhost';
$db = 'glazedskincare';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed". $conn->connect_error);
}
echo"";
?>