<?php 
            require_once  "conexion.php";
             if(isset($_POST['idEspe']))
                {
            $Id =  $_POST['idEspe']; 
            $Activo  =  $_POST['estadoEspe'] ;

                 $stmt= $conn->prepare("Update ket_doctores set activo= :Activo
                where Id= :Id");

                

               $stmt->bindValue(':Activo', $Activo, PDO::PARAM_STR);
                  $stmt->bindValue(':Id', $Id, PDO::PARAM_STR);
                  
        
        if ($stmt->execute())
            {
                  echo 'success';
            }
            else
            {
                 echo 'error';

            }

        }

               
     

?>