<?php

    // This guide demonstrates the five fundamental steps
    // of database interaction using PHP.

    // Credentials
    $dbhost = 'localhost';
    $dbuser = 'webuser';
    $dbpass = 'secretpassword';
    $dbname = 'globe_bank';

    // #1 Create a connection
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    // test if connection succeeded
    if(mysqli_connect_errno()){
    $err = "[!!] Database connection failed: ";
    $err .= mysqli_connect_error();
    $err .= "(".mysqli_connect_errno().")";
    exit($err);
    }

    // #2 Perform a query
    $sql = "select * from subjects";
    $results = mysqli_query($conn, $sql);
    if(!$results){
    exit("[!!] Database query failed.");
    }

    // #3 Use returned data (if any)
    while($subject = mysqli_fetch_assoc($results)){
    echo $subject["menu_name"]."<br/>";
    }

    // #4 Release returned data
    mysqli_free_result($results);

    // #5 Close connection
    mysqli_close($conn);
?>