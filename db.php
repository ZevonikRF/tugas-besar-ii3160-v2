<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database_name = "cafeabc";

    $db = new mysqli($hostname, $username, $password, $database_name);

    if ($db->connect_error) {
        echo "Database tidak terkoneksi";
        die("error");
    }
    // echo "Database terkoneksi";
?>