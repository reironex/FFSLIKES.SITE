<?php
// Database configuration
$host = "db4free.net";          // palitan mo depende sa DB host (default ng db4free)
$username = "your_db_username"; // palitan mo ng db4free username mo
$password = "your_db_password"; // palitan mo ng db4free password mo
$dbname = "your_db_name";       // palitan mo ng db4free database name mo

// User agent string (ginagamit sa mga cURL request mo)
$useragent = "Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.157 Safari/537.36";

// Gumawa ng MySQL connection
$connection = mysqli_connect($host, $username, $password, $dbname);

// Check kung may error
if (!$connection) {
    die('Could not connect: ' . mysqli_connect_error());
}

// Set encoding to UTF-8
mysqli_query($connection, "SET NAMES utf8") or die(mysqli_error($connection));
?>
