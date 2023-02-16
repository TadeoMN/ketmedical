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
                   $message = $_POST['message'];                  
                   $paq_car1 = $_POST['paq_car1']; 
                   $paq_car2 = $_POST['paq_car2']; 
                   $paq_car3 = $_POST['paq_car3']; 
                   $paq_car4 = $_POST['paq_car4']; 
                    $paq_car5 = $_POST['paq_car5']; 
                   $paq_precio = $_POST['paq_precio']; 
                  $como = $_POST['como']; 
                  $cuidados = $_POST['cuidados']; 
                  $anestesia = $_POST['anestesia']; 
                  $tiempo = $_POST['tiempo']; 
                 

                     
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
                            if(!empty($_FILES["imgespe2"]["tmp_name"]))
                            { 

                                            if (isset($_FILES["imgespe2"]["tmp_name"]))
                                        {
                                                 $uploadStatus = 1; 
                                                list($ancho,$alto)=getimagesize($_FILES["imgespe2"]["tmp_name"]);
                                                  $Nuevoancho=800;
                                                $Nuevoalto=800;

                                                //var_dump($_FILES["nuevaFoto"]["tmp_name"]);

                                                /* RUTA DE DIRECTORIO */
                                                $directorio =$ruta;
                                              

                                                if ($_FILES["imgespe2"]["type"]=="image/jpeg")
                                                {
                                                    /* Guardar la imagen en el directoiro */
                                                    $aleatorio=$name."2";
                                                    $ruta2=$uploadDir.$aleatorio.".jpg";
                                                    $origen=imagecreatefromjpeg($_FILES["imgespe2"]["tmp_name"]);
                                                    $destino=imagecreatetruecolor($Nuevoancho, $Nuevoalto);
                                                    imagecopyresized($destino, $origen, 0, 0, 0, 0, $Nuevoancho, $Nuevoalto, $ancho, $alto);
                                                    imagejpeg($destino,$ruta2);
                                                    
                                                }
                                                else if ($_FILES["imgespe2"]["type"]=="image/png")
                                                {
                                                    /* Guardar la imagen en el directoiro */
                                                  $aleatorio=$name."2";
                                                    $ruta2=$uploadDir.$aleatorio.".png";
                                                    $origen=imagecreatefrompng($_FILES["imgespe2"]["tmp_name"]);
                                                    $destino=imagecreatetruecolor($Nuevoancho, $Nuevoalto);
                                                    imagecopyresized($destino, $origen, 0, 0, 0, 0, $Nuevoancho, $Nuevoalto, $ancho, $alto);
                                                    imagepng($destino,$ruta2);
                                                    
                                                }
                                                else
                                                {
                                                       $uploadStatus = 0; 
                                                       $response = 'Formato de archivo no soportado'; 
                                                }
                                                
                                        }


                            }
                            if(!empty($_FILES["imgespe3"]["tmp_name"]))
                            { 

                                            if (isset($_FILES["imgespe3"]["tmp_name"]))
                                        {
                                                 $uploadStatus = 1; 
                                                list($ancho,$alto)=getimagesize($_FILES["imgespe3"]["tmp_name"]);
                                                $Nuevoancho=800;
                                                $Nuevoalto=800;

                                                //var_dump($_FILES["nuevaFoto"]["tmp_name"]);

                                                /* RUTA DE DIRECTORIO */
                                                $directorio =$ruta;
                                              

                                                if ($_FILES["imgespe3"]["type"]=="image/jpeg")
                                                {
                                                    /* Guardar la imagen en el directoiro */
                                                    $aleatorio=$name."3";
                                                    $ruta3=$uploadDir.$aleatorio.".jpg";
                                                    $origen=imagecreatefromjpeg($_FILES["imgespe3"]["tmp_name"]);
                                                    $destino=imagecreatetruecolor($Nuevoancho, $Nuevoalto);
                                                    imagecopyresized($destino, $origen, 0, 0, 0, 0, $Nuevoancho, $Nuevoalto, $ancho, $alto);
                                                    imagejpeg($destino,$ruta3);
                                                    
                                                }
                                                else if ($_FILES["imgespe3"]["type"]=="image/png")
                                                {
                                                    /* Guardar la imagen en el directoiro */
                                                    $aleatorio=$name."3";
                                                    $ruta3=$uploadDir.$aleatorio.".png";
                                                    $origen=imagecreatefrompng($_FILES["imgespe3"]["tmp_name"]);
                                                    $destino=imagecreatetruecolor($Nuevoancho, $Nuevoalto);
                                                    imagecopyresized($destino, $origen, 0, 0, 0, 0, $Nuevoancho, $Nuevoalto, $ancho, $alto);
                                                    imagepng($destino,$ruta3);
                                                    
                                                }
                                                else
                                                {
                                                       $uploadStatus = 0; 
                                                       $response = 'Formato de archivo no soportado'; 
                                                }
                                                
                                        }


                            }
                            if(!empty($_FILES["imgespe4"]["tmp_name"]))
                            { 

                                            if (isset($_FILES["imgespe4"]["tmp_name"]))
                                        {
                                                 $uploadStatus = 1; 
                                                list($ancho,$alto)=getimagesize($_FILES["imgespe4"]["tmp_name"]);
                                                $Nuevoancho=800;
                                                $Nuevoalto=800;


                                                //var_dump($_FILES["nuevaFoto"]["tmp_name"]);

                                                /* RUTA DE DIRECTORIO */
                                                $directorio =$ruta;
                                              

                                                if ($_FILES["imgespe4"]["type"]=="image/jpeg")
                                                {
                                                    /* Guardar la imagen en el directoiro */
                                                    $aleatorio=$name."4";
                                                    $ruta4=$uploadDir.$aleatorio.".jpg";
                                                    $origen=imagecreatefromjpeg($_FILES["imgespe4"]["tmp_name"]);
                                                    $destino=imagecreatetruecolor($Nuevoancho, $Nuevoalto);
                                                    imagecopyresized($destino, $origen, 0, 0, 0, 0, $Nuevoancho, $Nuevoalto, $ancho, $alto);
                                                    imagejpeg($destino,$ruta4);
                                                    
                                                }
                                                else if ($_FILES["imgespe4"]["type"]=="image/png")
                                                {
                                                    /* Guardar la imagen en el directoiro */
                                                     $aleatorio=$name."4";
                                                    $ruta4=$uploadDir.$aleatorio.".png";
                                                    $origen=imagecreatefrompng($_FILES["imgespe4"]["tmp_name"]);
                                                    $destino=imagecreatetruecolor($Nuevoancho, $Nuevoalto);
                                                    imagecopyresized($destino, $origen, 0, 0, 0, 0, $Nuevoancho, $Nuevoalto, $ancho, $alto);
                                                    imagepng($destino,$ruta4);
                                                    
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

                                if ( strlen($ruta2)==0)
                                {
                                  $ruta6=  "php/img/anonymous.png";
                                }
                                else
                                {
                                     $ruta6=  "php/".$ruta2; 
                                }

                                  if ( strlen($ruta3)==0)
                                {
                                  $ruta7=  "php/img/anonymous.png";
                                }
                                else
                                {
                                     $ruta7=  "php/".$ruta3; 
                                }

                                   if ( strlen($ruta4)==0)
                                {
                                  $ruta8=  "php/img/anonymous.png";
                                }
                                else
                                {
                                     $ruta8=  "php/".$ruta4; 
                                }
                             $stmt= $conn->prepare("insert into ket_paquetes (  id_paquete ,nombre_paquete,desc_paquete,precio_paquete,vigente_paquete,carac1_paquete,carac2_paquete,carac3_paquete,carac4_paquete,carac5_paquete,fot1_paquete,fot2_paquete,fot3_paquete,fot4_paquete,Anest_paquete,Tiem_paquete,Cuida_paquete,Como_paquete) values (:id_paquete ,:nombre_paquete,:desc_paquete,:precio_paquete,1,:carac1_paquete,:carac2_paquete,:carac3_paquete,:carac4_paquete,:carac5_paquete,:fot1_paquete,:fot2_paquete,:fot3_paquete,:fot4_paquete,:Anest_paquete,:Tiem_paquete,:Cuida_paquete,:Como_paquete)");
                                     $stmt->bindParam(":id_paquete",$estudio2,PDO::PARAM_STR);
                                 $stmt->bindParam(":nombre_paquete",$name,PDO::PARAM_STR);
                                  $stmt->bindParam(":desc_paquete",$message,PDO::PARAM_STR);
                                      $stmt->bindParam(":precio_paquete",$paq_precio,PDO::PARAM_STR);
                                 $stmt->bindParam(":carac1_paquete",$paq_car1,PDO::PARAM_STR);
                                  $stmt->bindParam(":carac2_paquete",$paq_car2,PDO::PARAM_STR);
                                   $stmt->bindParam(":carac3_paquete",$paq_car3,PDO::PARAM_STR);
                                  $stmt->bindParam(":carac4_paquete",$paq_car4,PDO::PARAM_STR);
                                   $stmt->bindParam(":carac5_paquete",$paq_car5,PDO::PARAM_STR);
                                $stmt->bindParam(":fot1_paquete",$ruta5,PDO::PARAM_STR);
                                    $stmt->bindParam(":fot2_paquete",$ruta6,PDO::PARAM_STR);
                                        $stmt->bindParam(":fot3_paquete",$ruta7,PDO::PARAM_STR);
                                            $stmt->bindParam(":fot4_paquete",$ruta8,PDO::PARAM_STR);
                                    $stmt->bindParam(":Anest_paquete",$anestesia,PDO::PARAM_STR);
                                           $stmt->bindParam(":Tiem_paquete",$tiempo,PDO::PARAM_STR);
                                       $stmt->bindParam(":Cuida_paquete",$cuidados,PDO::PARAM_STR);
                                       $stmt->bindParam(":Como_paquete",$como,PDO::PARAM_STR);
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
                    
                    
   

 
    

  
   

