<?php
$servername = "localhost";
$username = "johebuck";
$password = "coffeelasagnabuffalo";
$dbname = "johebuck";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
   die("Connection failed " . $conn->connect_error);
}
?>