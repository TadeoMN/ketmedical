<?php 
            require_once  "conexion.php";
 
          $uploadDir = 'img/'; 
                $response='';
                if(isset($_POST['esp_nuevo']))
                {
                      echo '<script> alert(\"entre\");

                        </script>';
                    $name = $_POST['esp_nuevo']; 
                     
                    // Check whether submitted data is not empty 
                    if(!empty($name) )
                    {

                        // Upload file 
                            $ruta = ''; 
                            $uploadStatus = 1; 
                            if(!empty($_FILES["imgespe"]["tmp_name"]))
                            { 

                                            if (isset($_FILES["imgespe"]["tmp_name"]))
                                        {
                                                 $uploadStatus = 1; 
                                                list($ancho,$alto)=getimagesize($_FILES["imgespe"]["tmp_name"]);
                                                $Nuevoancho=500;
                                                $Nuevoalto=500;

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
                                  $ruta2=  "php/img/anonymous.png";
                                }
                                else
                                {
                                     $ruta2=  "php/".$ruta; 
                                }
                             $stmt= $conn->prepare("insert into ket_especialidades (Especialidad,Imagen) values (:Especialidad,:Imagen)");
                                 $stmt->bindParam(":Especialidad",$name,PDO::PARAM_STR);
                                $stmt->bindParam(":Imagen",$ruta2,PDO::PARAM_STR);

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
                           


                        }
                    }
                    
                }

                

                    
                    
   

 
    

  
   

