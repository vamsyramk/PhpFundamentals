<?php
$dbpassword = "root";
$dbusername = "root";
$dbserver = "localhost";
$dbname = "phpfundamentals";

$connection = new mysqli($dbserver, $dbusername, $dbpassword, $dbname);

$query = "SELECT id, first_name, last_name, pen_name FROM Authors ORDER BY first_name";
$resultObj = $connection->query($query);

?>