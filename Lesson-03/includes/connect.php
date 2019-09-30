<?php
    /*
        A simple reusable connection script
        https://www.php.net/manual/en/pdo.construct.php
    */

    // Our connection details
    $host = "localhost";
    $dbname = "comp_1006";
    $username = "root";
    $password = "";

    // Creates the connection
    try {
        $conn = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // turns on errmode to catch errors
        echo "Alls good. Alls honkey dory";
    } catch (PDOException $e) {
        echo "BAIL! BAIL! SHIPS GOIN' DOWN!!!";
        exit;
    }
?>