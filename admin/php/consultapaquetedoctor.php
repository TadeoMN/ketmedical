<?php 
 require_once  "conexion.php";


$especialidad = $_REQUEST["id"];
$id_paquete  = $_REQUEST["id_especialidad"];

	 $stmt = $conn->prepare("SELECT id ,id_paquete ,nombre_paquete,0 activo FROM ket_paquetes where vigente_paquete='1' and id_paquete =:id_paquete 
and id not in (select id_paquete from ket_doctorpaquetes where id_doctor=:id_doctor) union 
select ket_doctorpaquetes.id_paquete id,ket_paquetes.id_paquete,ket_paquetes.nombre_paquete,1 activo from ket_doctorpaquetes join ket_paquetes on ket_paquetes.id=ket_doctorpaquetes.id_paquete where id_doctor=:id_doctor2 and ket_paquetes.id_paquete=:id_paquete2
ORDER BY nombre_paquete");
  		    $stmt->bindValue(':id_paquete', (int)$id_paquete, PDO::PARAM_INT);
           $stmt->bindValue(':id_doctor', (int)$especialidad, PDO::PARAM_INT);
             $stmt->bindValue(':id_paquete2', (int)$id_paquete, PDO::PARAM_INT);
           $stmt->bindValue(':id_doctor2', (int)$especialidad, PDO::PARAM_INT);


											          $stmt->execute();
											          $countriesList = $stmt->fetchAll();

											          $response = array();
   foreach($countriesList as $state){
      $response[] = array(
        "Id" => $state['id'],
        "Especialidad" => $state['nombre_paquete']     ,
         "activo" => $state['activo'] 
      );
   }

    echo  json_encode($response);
   

?>