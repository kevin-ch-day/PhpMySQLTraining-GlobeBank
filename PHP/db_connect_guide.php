<?php

// This guide demonstrates the five fundamental steps
// of database interaction using PHP.

// Credentials
$dbhost = 'localhost';
$dbuser = 'webuser';
$dbpass = 'secretpassword';
$dbname = 'globe_bank';

// 1. Create a database connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// 2. Perform database query
$sql = "select * from subjects";
$results = mysqli_query($conn, $sql);

// 3. Use returned data (if any)

// 4. Release returned data
mysqli_free_result($results);

// 5. Close database connection
mysqli_close($conn);

?>
