<?php 
            require_once  "conexion.php";
             if(isset($_POST['idEspe']))
                {
            $Id =  $_POST['idEspe']; 
         
                 $stmt= $conn->prepare("Delete from ket_auxpedidos 
                where id= :Id");

                

             
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