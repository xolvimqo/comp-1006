<?php

  function connect () {
    /*
        A simple reusable connection script
        https://www.php.net/manual/en/pdo.construct.php
    */

    // Our connection details
    $host = "localhost";
    $dbname = "php_project";
    $username = "root";
    $password = "";

    // Creates the connection
    try {
      $conn = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);

      // Sets error handling settings
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      // Will output the error message and exit the application
      echo 'Connection failed: ' . $e->getMessage();
      exit; // can also use die();
    }
    
    return $conn;
  }