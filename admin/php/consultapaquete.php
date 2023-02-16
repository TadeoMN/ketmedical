<?php 
 require_once  "conexion.php";


$especialidad = $_REQUEST["id"];

	 $stmt = $conn->prepare("SELECT id, id_paquete,nombre_paquete,desc_paquete,precio_paquete,carac1_paquete,carac2_paquete,carac3_paquete,carac4_paquete,carac5_paquete,fot1_paquete,fot2_paquete,fot3_paquete,fot4_paquete,Como_paquete,Cuida_paquete, Tiem_paquete,Anest_paquete  FROM ket_paquetes  where id=:id ORDER BY id");
  			  $stmt->bindValue(':id', (int)$especialidad, PDO::PARAM_INT);



 

											          $stmt->execute();
											          $countriesList = $stmt->fetchAll();

											          $response = array();
   foreach($countriesList as $state){
      $response[] = array(
        "id_paquete" => $state['id_paquete'],
        "nombre_paquete" => $state['nombre_paquete'],
         "desc_paquete" => $state['desc_paquete'],
           "precio_paquete" => $state['precio_paquete'],
           "carac1_paquete" => $state['carac1_paquete'],
        "carac2_paquete" => $state['carac2_paquete'],
         "carac3_paquete" => $state['carac3_paquete'],
           "carac4_paquete" => $state['carac4_paquete'],
           "carac5_paquete" => $state['carac5_paquete']
           ,
        "fot1_paquete" => $state['fot1_paquete'],
         "fot2_paquete" => $state['fot2_paquete'],
           "fot3_paquete" => $state['fot3_paquete'],
           "fot4_paquete" => $state['fot4_paquete'],
           "Anest_paquete" => $state['Anest_paquete'],
           "Tiem_paquete" => $state['Tiem_paquete'],
           "Cuida_paquete" => $state['Cuida_paquete'],
           "Como_paquete" => $state['Como_paquete'],
           "id" => $state['id']
      );
   }

    echo  json_encode($response);
   

?>