<?php 
include  "conexion.php";
if(isset($_POST['request'])){
   $request = $_POST['request'];
}

$usuario = $_REQUEST["usuario"];
$password = $_REQUEST["password"];
$passwordfinal=md5($password);


	 $stmt = $conn->prepare("SELECT count(correo) usuario FROM ket_usuario where correo=:usuario and password=:password" );
  			  $stmt->bindValue(':usuario', $usuario, PDO::PARAM_STR);
         $stmt->bindValue(':password', $passwordfinal, PDO::PARAM_STR);

											          $stmt->execute();
											          $countriesList = $stmt->fetchAll();

											          $response = array();
   foreach($countriesList as $state){
      $response[] = array(
        "usuario" => $state['usuario']
       

      );

   }
     session_start();
       $_SESSION['usuarioactivo']=$usuario;

    echo  json_encode($response);
   

?>