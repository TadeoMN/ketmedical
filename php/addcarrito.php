<?php 
            require_once  "conexion.php";
           
 
  //Definimos el tratamiento de errores no controlados
 
 
          $uploadDir = 'img/'; 
                $response='';
                echo '<script> alert(\"que rollo\");

                        </script>';
               
                     
                     $iddr = $_REQUEST["iddr"];
                        $id_doctor = $_REQUEST["id_doctor"];
                    //$estudio2p = $_REQUEST["studio2p"]; 
                    $paquete = $_REQUEST["paquete"];  
                     $quantity = $_REQUEST["quantity"];  
                   $preciofinal = $_REQUEST["preciofinal"];  
                     $IdSession = $_REQUEST["session"];  
              

                    // Check whether submitted data is not empty 
                    if(!empty($paquete) )
                    {
                            
                        // Upload file 
                          
                        
                            $uploadStatus = 1; 
                            
                            
                            if($uploadStatus == 1)
                            {
                             
                                 
                             $stmt= $conn->prepare("insert into ket_auxpedidos (    id_usuario, id_doctor ,id_paquete,cantidad,precio_u,total,IdSession) values (:id_usuario,:id_doctor ,:id_paquete,:cantidad,:precio_u,:total,:IdSession)");
                                     $stmt->bindParam(":id_usuario",$iddr,PDO::PARAM_STR);
                                 $stmt->bindParam(":id_doctor",$id_doctor ,PDO::PARAM_STR);
                                    $stmt->bindParam(":id_paquete",$paquete,PDO::PARAM_STR);
                                         $stmt->bindParam(":precio_u",$preciofinal,PDO::PARAM_STR);
                                    $stmt->bindParam(":cantidad",$quantity,PDO::PARAM_STR);
                                      $total = $preciofinal * $quantity;
                                     $stmt->bindParam(":total",$total,PDO::PARAM_STR);
                                      $stmt->bindParam(":IdSession",$IdSession,PDO::PARAM_STR);
                                      session_start();
                               // $_SESSION['usuarioactivo']=$email;
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
                    
                    
   

 
    

  
   

