<?php
  require_once('db_credentials.php');

  // connect to database
  function db_connect() {
    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    confirm_db_connect();
    return $conn;
  }

  // disconnect from database
  function db_disconnect($conn) {
    if(isset($conn)) {
      mysqli_close($conn);
    }
  }

  // test if connection succeeded
  function confirm_db_connect(){
    if(mysqli_connect_errno()){
      $err = "[!!] Database connection failed: ";
      $err .= mysqli_connect_error();
      $err .= "(".mysqli_connect_errno().")";
      exit($err);
    }
  }

  function confirm_results($results){
    if(!$results){
      exit("[!!] Database query failed.");
    }
  }
?>
