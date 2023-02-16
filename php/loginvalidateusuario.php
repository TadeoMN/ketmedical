<?php 
            require_once  "conexion.php";
           
 
  //Definimos el tratamiento de errores no controlados
 
 
          $uploadDir = 'img/'; 
                $response='';
                echo '<script> alert(\"que rollo\");

                        </script>';
               
                     
                        $email = $_REQUEST["email"];
                    //$estudio2p = $_REQUEST["studio2p"]; 
                    $password = $_REQUEST["password"];  
                     $nombre = $_REQUEST["nombre"];  
                   $phone = $_REQUEST["phone"];  
                   $rpassword = $_REQUEST["rpassword"];  
                $passwordfinal=md5($password);

                    // Check whether submitted data is not empty 
                    if(!empty($email) )
                    {
                            
                        // Upload file 
                          
                        
                            $uploadStatus = 1; 
                            
                            
                            if($uploadStatus == 1)
                            {
                             
                                 
                             $stmt= $conn->prepare("insert into ket_usuario (    correo, nombre ,telefono,password) values (:email,:nombre ,:telefono,:password)");
                                     $stmt->bindParam(":email",$email,PDO::PARAM_STR);
                                 $stmt->bindParam(":nombre",$nombre ,PDO::PARAM_STR);
                                    $stmt->bindParam(":telefono",$phone,PDO::PARAM_STR);
                                    $stmt->bindParam(":password",$passwordfinal,PDO::PARAM_STR);
                                      session_start();
                                $_SESSION['usuarioactivo']=$email;
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
                    
                    
   

 
    

  
   

