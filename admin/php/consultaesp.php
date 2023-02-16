<?php 
 require_once  "conexion.php";


$especialidad = $_REQUEST["id"];

	 $stmt = $conn->prepare("SELECT Imagen   FROM ket_especialidades  where id=:id ORDER BY id");
  			  $stmt->bindValue(':id', (int)$especialidad, PDO::PARAM_INT);



 

											          $stmt->execute();
											          $countriesList = $stmt->fetchAll();

											          $response = array();
   foreach($countriesList as $state){
      $response[] = array(
        "Imagen" => $state['Imagen']

      );
   }

    echo  json_encode($response);
   

?>