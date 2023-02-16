<?php
    $host = "localhost";
    $user = "v3tdojiyx4ao";
    $password = "KetMedical2023";
    $dbname = "ketmedical";
    $port = "3306";

    $connection = mysqli_connect($host, $user, $password, $dbname, $port);

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }