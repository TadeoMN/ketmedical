<?php 
            require_once  "conexion.php";
             if(isset($_POST['idEspe']))
                {
            $Id =  $_POST['idEspe']; 
            $quantity1  =  $_POST['quantity1'] ;

                 $stmt= $conn->prepare("Update ket_auxpedidos set cantidad= :quantity1
                where Id= :Id");

                

               $stmt->bindValue(':quantity1', $quantity1, PDO::PARAM_STR);
                  $stmt->bindValue(':Id', $Id, PDO::PARAM_STR);
                  
        
        if ($stmt->execute())
            {
                  echo 'success';

                  $stmt= $conn->prepare("Update ket_auxpedidos set total= cantidad*precio_u
                where Id= :Id");

                

           
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
            else
            {
                 echo 'error';

            }

        }

               
     

?>