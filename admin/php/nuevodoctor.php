<?php 
            require_once  "conexion.php";
            error_reporting (E_ALL);
 
  //Definimos el tratamiento de errores no controlados
  set_error_handler(function () 
  {
    throw new Exception("Error");
  });
 
          $uploadDir = 'img/'; 
                $response='';
                if(isset($_POST['esp_nuevo']))
                {
                      echo '<script> alert(\"entre\");

                        </script>';
                    $estudio2 = $_POST['estudio2']; 
                    $name = $_POST['esp_nuevo'];                  
                   $email = $_POST['email'];                  
                   $password = $_POST['password']; 
                   $Cedula = $_POST['Cedula']; 
                   

                     
                    // Check whether submitted data is not empty 
                    if(!empty($name) )
                    {

                        // Upload file 
                            $ruta = ''; 
                             $ruta2 = ''; 
                              $ruta3 = ''; 
                               $ruta4 = ''; 
                                $ruta5 = ''; 
                             $ruta6 = ''; 
                              $ruta7 = ''; 
                               $ruta8 = ''; 
                            $uploadStatus = 1; 
                            if(!empty($_FILES["imgespe"]["tmp_name"]))
                            { 

                                            if (isset($_FILES["imgespe"]["tmp_name"]))
                                        {
                                                 $uploadStatus = 1; 
                                                list($ancho,$alto)=getimagesize($_FILES["imgespe"]["tmp_name"]);
                                              //  $Nuevoancho=500;
                                               // $Nuevoalto=500;
                                                  $Nuevoancho=800;
                                                $Nuevoalto=800;


                                                //var_dump($_FILES["nuevaFoto"]["tmp_name"]);

                                                /* RUTA DE DIRECTORIO */
                                                $directorio =$ruta;
                                              

                                                if ($_FILES["imgespe"]["type"]=="image/jpeg")
                                                {
                                                    /* Guardar la imagen en el directoiro */
                                                    $aleatorio=$name;
                                                    $ruta=$uploadDir.$aleatorio.".jpg";
                                                    $origen=imagecreatefromjpeg($_FILES["imgespe"]["tmp_name"]);
                                                    $destino=imagecreatetruecolor($Nuevoancho, $Nuevoalto);
                                                    imagecopyresized($destino, $origen, 0, 0, 0, 0, $Nuevoancho, $Nuevoalto, $ancho, $alto);
                                                    imagejpeg($destino,$ruta);
                                                    
                                                }
                                                else if ($_FILES["imgespe"]["type"]=="image/png")
                                                {
                                                    /* Guardar la imagen en el directoiro */
                                                    $aleatorio=$name;
                                                    $ruta=$uploadDir.$aleatorio.".png";
                                                    $origen=imagecreatefrompng($_FILES["imgespe"]["tmp_name"]);
                                                    $destino=imagecreatetruecolor($Nuevoancho, $Nuevoalto);
                                                    imagecopyresized($destino, $origen, 0, 0, 0, 0, $Nuevoancho, $Nuevoalto, $ancho, $alto);
                                                    imagepng($destino,$ruta);
                                                    
                                                }
                                                else
                                                {
                                                       $uploadStatus = 0; 
                                                       $response = 'Formato de archivo no soportado'; 
                                                }
                                                
                                        }


                            }
                            
                            if($uploadStatus == 1)
                            {
                              if ( strlen($ruta)==0)
                                {
                                  $ruta5=  "php/img/anonymous.png";
                                }
                                else
                                {
                                     $ruta5=  "php/".$ruta; 
                                }

                                $passwordfinal=md5($password);
                                
                             $stmt= $conn->prepare("insert into ket_doctores ( id_especialidad, Nombre ,correo,password,cedula,activo,imagen) values (:id_especialidad,:Nombre ,:correo,:password,:cedula,1,:imagen)");
                                     $stmt->bindParam(":id_especialidad",$estudio2,PDO::PARAM_STR);
                                 $stmt->bindParam(":Nombre",$name,PDO::PARAM_STR);
                                  $stmt->bindParam(":correo",$email,PDO::PARAM_STR);
                                      $stmt->bindParam(":password",$passwordfinal,PDO::PARAM_STR);
                                 $stmt->bindParam(":cedula",$Cedula,PDO::PARAM_STR);
                                   $stmt->bindParam(":imagen",$ruta5,PDO::PARAM_STR);
                                 
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
                    
                }

                
restore_error_handler();
?>
                    
                    
   

 
    

  
   

