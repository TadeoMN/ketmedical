<?php 
include  "conexion.php";
if(isset($_POST['request'])){
   $request = $_POST['request'];
}

$usuario = $_REQUEST["email"];
$password = $_REQUEST["password"];
$passwordfinal=md5($password);


	 $stmt = $conn->prepare("SELECT count(Id ) usuario  FROM ket_doctores where correo=:usuario and password=:password and activo=1" );
  			  $stmt->bindValue(':usuario', $usuario, PDO::PARAM_STR);
         $stmt->bindValue(':password', $passwordfinal, PDO::PARAM_STR);

											          $stmt->execute();
											          $countriesList = $stmt->fetchAll();

											          $response = array();
   foreach($countriesList as $state){
      $response[] = array(
        "usuario" => $state['usuario']
      //  $_SESSION['usuario']=$state['usuario'];

      );
      session_start();
       $_SESSION['usuario']=$usuario;
   }

    echo  json_encode($response);
   

?>