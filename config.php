<?php
// Database config from InfinityFree
$host = "sql307.infinityfree.com ";   // Palitan ng exact DB host (hal. sql212.epizy.com)
$username = "if0_39892767";  // Iyong DB username galing sa cPanel
$password = "7rpmBSXrI0QFoO"; // Iyong DB password
$dbname = "if0_39892767_XXX "; // Iyong DB name

// Optional user agent (ginagamit sa requests mo)
$useragent = "Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.157 Safari/537.36";

// Gumawa ng MySQL connection
$connection = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$connection) {
    die('Could not connect: ' . mysqli_connect_error());
}

// Set encoding to UTF-8
mysqli_query($connection, "SET NAMES utf8") or die(mysqli_error($connection));
?>
