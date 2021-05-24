<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mharvr";

$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
	echo "connection failed";
}

?>