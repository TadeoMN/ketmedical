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
                if(isset($_POST['esp_nuevoe']))
                {
                      echo '<script> alert(\"entre\");

                        </script>';
                    $uploadDir = 'img/'; 
                $response='';
                
                     
                        $idEspe = $_POST['idEspe']; 
                    $estudio2 = $_POST['estudio2e']; 
                    $name = $_POST['esp_nuevoe'];                  
                   $message = $_POST['messagee'];                  
                   $paq_car1 = $_POST['paq_car1e']; 
                   $paq_car2 = $_POST['paq_car2e']; 
                   $paq_car3 = $_POST['paq_car3e']; 
                   $paq_car4 = $_POST['paq_car4e']; 
                    $paq_car5 = $_POST['paq_car5e']; 
                   $paq_precio = $_POST['paq_precioe']; 
                    $rutaalt= $_POST['img1']; 
                  $rutaalt2= $_POST['img2']; 
                   $rutaalt3= $_POST['img3']; 
                    $rutaalt4= $_POST['img4']; 
                
                 
                 

                     
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
                            if(!empty($_FILES["imgespee"]["tmp_name"]))
                            { 

                                            if (isset($_FILES["imgespee"]["tmp_name"]))
                                        {
                                                 $uploadStatus = 1; 
                                                list($ancho,$alto)=getimagesize($_FILES["imgespee"]["tmp_name"]);
                                              //  $Nuevoancho=500;
                                               // $Nuevoalto=500;
                                                  $Nuevoancho=800;
                                                $Nuevoalto=800;


                                                //var_dump($_FILES["nuevaFoto"]["tmp_name"]);

                                                /* RUTA DE DIRECTORIO */
                                                $directorio =$ruta;
                                              

                                                if ($_FILES["imgespee"]["type"]=="image/jpeg")
                                                {
                                                    /* Guardar la imagen en el directoiro */
                                                    $aleatorio=$name;
                                                    $ruta=$uploadDir.$aleatorio.".jpg";
                                                    $origen=imagecreatefromjpeg($_FILES["imgespee"]["tmp_name"]);
                                                    $destino=imagecreatetruecolor($Nuevoancho, $Nuevoalto);
                                                    imagecopyresized($destino, $origen, 0, 0, 0, 0, $Nuevoancho, $Nuevoalto, $ancho, $alto);
                                                    imagejpeg($destino,$ruta);
                                                    
                                                }
                                                else if ($_FILES["imgespee"]["type"]=="image/png")
                                                {
                                                    /* Guardar la imagen en el directoiro */
                                                    $aleatorio=$name;
                                                    $ruta=$uploadDir.$aleatorio.".png";
                                                    $origen=imagecreatefrompng($_FILES["imgespee"]["tmp_name"]);
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
                            if(!empty($_FILES["imgespe2e"]["tmp_name"]))
                            { 

                                            if (isset($_FILES["imgespe2e"]["tmp_name"]))
                                        {
                                                 $uploadStatus = 1; 
                                                list($ancho,$alto)=getimagesize($_FILES["imgespe2e"]["tmp_name"]);
                                                  $Nuevoancho=800;
                                                $Nuevoalto=800;

                                                //var_dump($_FILES["nuevaFoto"]["tmp_name"]);

                                                /* RUTA DE DIRECTORIO */
                                                $directorio =$ruta;
                                              

                                                if ($_FILES["imgespe2e"]["type"]=="image/jpeg")
                                                {
                                                    /* Guardar la imagen en el directoiro */
                                                    $aleatorio=$name."2";
                                                    $ruta2=$uploadDir.$aleatorio.".jpg";
                                                    $origen=imagecreatefromjpeg($_FILES["imgespe2e"]["tmp_name"]);
                                                    $destino=imagecreatetruecolor($Nuevoancho, $Nuevoalto);
                                                    imagecopyresized($destino, $origen, 0, 0, 0, 0, $Nuevoancho, $Nuevoalto, $ancho, $alto);
                                                    imagejpeg($destino,$ruta2);
                                                    
                                                }
                                                else if ($_FILES["imgespe2e"]["type"]=="image/png")
                                                {
                                                    /* Guardar la imagen en el directoiro */
                                                  $aleatorio=$name."2";
                                                    $ruta2=$uploadDir.$aleatorio.".png";
                                                    $origen=imagecreatefrompng($_FILES["imgespe2e"]["tmp_name"]);
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
                            if(!empty($_FILES["imgespe3e"]["tmp_name"]))
                            { 

                                            if (isset($_FILES["imgespe3e"]["tmp_name"]))
                                        {
                                                 $uploadStatus = 1; 
                                                list($ancho,$alto)=getimagesize($_FILES["imgespe3e"]["tmp_name"]);
                                                $Nuevoancho=800;
                                                $Nuevoalto=800;

                                                //var_dump($_FILES["nuevaFoto"]["tmp_name"]);

                                                /* RUTA DE DIRECTORIO */
                                                $directorio =$ruta;
                                              

                                                if ($_FILES["imgespe3e"]["type"]=="image/jpeg")
                                                {
                                                    /* Guardar la imagen en el directoiro */
                                                    $aleatorio=$name."3";
                                                    $ruta3=$uploadDir.$aleatorio.".jpg";
                                                    $origen=imagecreatefromjpeg($_FILES["imgespe3e"]["tmp_name"]);
                                                    $destino=imagecreatetruecolor($Nuevoancho, $Nuevoalto);
                                                    imagecopyresized($destino, $origen, 0, 0, 0, 0, $Nuevoancho, $Nuevoalto, $ancho, $alto);
                                                    imagejpeg($destino,$ruta3);
                                                    
                                                }
                                                else if ($_FILES["imgespe3e"]["type"]=="image/png")
                                                {
                                                    /* Guardar la imagen en el directoiro */
                                                    $aleatorio=$name."3";
                                                    $ruta3=$uploadDir.$aleatorio.".png";
                                                    $origen=imagecreatefrompng($_FILES["imgespe3e"]["tmp_name"]);
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
                            if(!empty($_FILES["imgespe4e"]["tmp_name"]))
                            { 

                                            if (isset($_FILES["imgespe4e"]["tmp_name"]))
                                        {
                                                 $uploadStatus = 1; 
                                                list($ancho,$alto)=getimagesize($_FILES["imgespe4e"]["tmp_name"]);
                                                $Nuevoancho=800;
                                                $Nuevoalto=800;


                                                //var_dump($_FILES["nuevaFoto"]["tmp_name"]);

                                                /* RUTA DE DIRECTORIO */
                                                $directorio =$ruta;
                                              

                                                if ($_FILES["imgespe4e"]["type"]=="image/jpeg")
                                                {
                                                    /* Guardar la imagen en el directoiro */
                                                    $aleatorio=$name."4";
                                                    $ruta4=$uploadDir.$aleatorio.".jpg";
                                                    $origen=imagecreatefromjpeg($_FILES["imgespe4e"]["tmp_name"]);
                                                    $destino=imagecreatetruecolor($Nuevoancho, $Nuevoalto);
                                                    imagecopyresized($destino, $origen, 0, 0, 0, 0, $Nuevoancho, $Nuevoalto, $ancho, $alto);
                                                    imagejpeg($destino,$ruta4);
                                                    
                                                }
                                                else if ($_FILES["imgespe4e"]["type"]=="image/png")
                                                {
                                                    /* Guardar la imagen en el directoiro */
                                                     $aleatorio=$name."4";
                                                    $ruta4=$uploadDir.$aleatorio.".png";
                                                    $origen=imagecreatefrompng($_FILES["imgespe4e"]["tmp_name"]);
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
                                  $ruta5=  $rutaalt;
                                }
                                else
                                {
                                     $ruta5=  "php/".$ruta; 
                                }

                                if ( strlen($ruta2)==0)
                                {
                                  $ruta6=  $rutaalt2;
                                }
                                else
                                {
                                     $ruta6=  "php/".$ruta2; 
                                }

                                  if ( strlen($ruta3)==0)
                                {
                                  $ruta7=  $rutaalt3;
                                }
                                else
                                {
                                     $ruta7=  "php/".$ruta3; 
                                }

                                   if ( strlen($ruta4)==0)
                                {
                                  $ruta8=  $rutaalt4;
                                }
                                else
                                {
                                     $ruta8=  "php/".$ruta4; 
                                }

                             $stmt= $conn->prepare("Update  ket_paquetes set  id_paquete=:id_paquete ,nombre_paquete=:nombre_paquete,desc_paquete=:desc_paquete,precio_paquete=:precio_paquete,carac1_paquete=:carac1_paquete,carac2_paquete=:carac2_paquete,carac3_paquete=:carac3_paquete,carac4_paquete=:carac4_paquete,carac5_paquete=:carac5_paquete,fot1_paquete=:fot1_paquete,fot2_paquete=:fot2_paquete,fot3_paquete=:fot3_paquete,fot4_paquete=:fot4_paquete where id=:id");
                              $stmt->bindParam(":id",$idEspe,PDO::PARAM_STR);
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

                                 if ($stmt->execute())
                                       {
                                          $response= 'exito'; 
                                           
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