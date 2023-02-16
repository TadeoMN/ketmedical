<?php 
            require_once  "conexion.php";
            session_start();
 
          $uploadDir = 'img/'; 
                $response='';
                      echo '<script> alert(\"entre\");

                        </script>';
                    $facebook = $_POST['facebook']; 
                    $twitter = $_POST['twitter'];                  
                   $instagram = $_POST['instagram'];                  
                   $pinterest = $_POST['pinterest']; 
                   $linkedin = $_POST['linkedin']; 
                    $youtube = $_POST['youtube']; 
                 

                     
                    // Check whether submitted data is not empty 
                 

                        // Upload file 
                           $uploadStatus=1;
                            if($uploadStatus == 1)
                            {
                                 $usuario="";
                             $usuario= $_SESSION['usuario'];
                             $stmt= $conn->prepare("update  ket_doctores set facebook=:facebook,twitter=:twitter,instagram=:instagram,pinterest=:pinterest,linkedin=:linkedin,youtube=:youtube where correo=:correo ");
                                     $stmt->bindParam(":facebook",$facebook,PDO::PARAM_STR);
                                 $stmt->bindParam(":twitter",$twitter,PDO::PARAM_STR);
                                  $stmt->bindParam(":instagram",$instagram,PDO::PARAM_STR);
                                      $stmt->bindParam(":pinterest",$pinterest,PDO::PARAM_STR);
                                 $stmt->bindParam(":linkedin",$linkedin,PDO::PARAM_STR);
                                   $stmt->bindParam(":youtube",$youtube,PDO::PARAM_STR);
                                    $stmt->bindParam(":correo",$usuario,PDO::PARAM_STR);
                            
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
                    
                    
                

                
?>
                    
                    
   

 
    

  
   

