
<?php
    $server = "localhost";
    $username = "v3tdojiyx4ao";
    $password = "KetMedical2023";
    $dbname = "KetMedical";
    $port = "3306";
    try {
       $conn = new PDO("mysql:host=$server;port=$port;dbname=$dbname","$username","$password");
       $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
       die('Unable to connect with the database');
    }
