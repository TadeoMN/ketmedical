<?php 
 require_once  "conexion.php";


$especialidad = $_REQUEST["id"];

	 $stmt = $conn->prepare("SELECT id, id_especialidad,Nombre,correo,password,cedula,imagen  FROM ket_doctores  where id=:id ORDER BY Nombre");
  			  $stmt->bindValue(':id', (int)$especialidad, PDO::PARAM_INT);



 

											          $stmt->execute();
											          $countriesList = $stmt->fetchAll();

											          $response = array();
   foreach($countriesList as $state){
      $response[] = array(
        "id_especialidad" => $state['id_especialidad'],
        "Nombre" => $state['Nombre'],
         "correo" => $state['correo'],
           "password" => $state['password'],
           "cedula" => $state['cedula'],
        "imagen" => $state['imagen'],
         
           "id" => $state['id']
      );
   }

    echo  json_encode($response);
   

?>