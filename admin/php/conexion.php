
<?php
/*$server = "localhost";
$username = "yoyoman_ket";
$password = "Yoyito2206";
$dbname = "yoyoman_ket";
$port = "3306";
*/

//$server = "localhost";
//$username = "k4vbubpamonl";
//$password = "Moscati2020=";
//$dbname = "Moscati_datos";
//$port = "3306";

$server = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "ket";
$port = "3308";
// Create connection
try{
   $conn = new PDO("mysql:host=$server;port=$port;dbname=$dbname","$username","$password");
   $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
   die('Unable to connect with the database');
}


