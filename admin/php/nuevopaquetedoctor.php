<?php 
            require_once  "conexion.php";
           
 
  //Definimos el tratamiento de errores no controlados
 
 
          $uploadDir = 'img/'; 
                $response='';
                echo '<script> alert(\"que rollo\");

                        </script>';
               
                     
                        $estudio2p = $_REQUEST["estudio2p"];
                    //$estudio2p = $_REQUEST["studio2p"]; 
                    $idEspe = $_REQUEST["idEspe"];  
                                
                   $array = $_REQUEST["array"];      
     
                   $str_arr = explode ("-", $array); 
                
                    // Check whether submitted data is not empty 
                    if(!empty($idEspe) )
                    {
                            
                        // Upload file 
                          
                        
                            $uploadStatus = 1; 
                            
                            
                            if($uploadStatus == 1)
                            {
                             
                               $stmt= $conn->prepare("delete from ket_doctorpaquetes where id_doctor=:id_doctor ");
                                  $stmt->bindParam(":id_doctor",$idEspe,PDO::PARAM_STR);
                                  $stmt->execute();
                                
                             $stmt= $conn->prepare("insert into ket_doctorpaquetes (    id_doctor, id_paquete ,precio,activo) values (:id_doctor,:id_paquete ,(select precio_paquete from ket_paquetes where id=:id_paquete2),'1')");
                                     $stmt->bindParam(":id_doctor",$idEspe,PDO::PARAM_STR);
                                 $stmt->bindParam(":id_paquete",$str_arr[1] ,PDO::PARAM_STR);
                                    $stmt->bindParam(":id_paquete2",$str_arr[1],PDO::PARAM_STR);
                               
                                 if ($stmt->execute())
                                       {
                                          $response= 'exito'; 
                                           echo '<script>
                                                Swal.fire({

                                                        icon: "success",
                                                        title: "La especialidad ha sido creada con éxito bye bye",
                                                        showConfirmButton: true,
                                                        confirmButtonText: "Cerrar",
                                                        closeOnConfirm: false
                                                    }).then((result)=>{
                                                            if(result.value)
                                                            {
                                                                window.location.href="specialities.php";
                                                            }


                                                })
                                                

                                            </script>';
                                        }
                                        else
                                        {
                                             $resultado=  $stmt->errorInfo();
                                        }
                           


                        }
                    }
                    
                

                

?>
                    
                    
   

 
    

  
   

