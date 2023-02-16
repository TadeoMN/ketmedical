<?php
include  "conexion.php";
require  'PHPMailer/PHPMailerAutoload.php';
error_reporting (E_ALL);
 
  //Definimos el tratamiento de errores no controlados
  set_error_handler(function () 
  {
    throw new Exception("Error");
  });

$iddr =  $_POST['iddr']; 
$total =  $_POST['total'] ;
$idPaypal = $_POST['idPaypal'] ;
$IdPayPalPago = $_POST['IdPayPalPago'] ;
$nombre = $_POST['nombre'] ;
$apellido = $_POST['apellido'] ;
$email = $_POST['email'] ;
$telefono = $_POST['telefono'] ;







$to    = "ventas@ketmedical.com.mx"; // ENTER YOUR EMAIL ADDRESS


$mail = new PHPMailer(true);
$mail->isSMTP(); 
            $mail->CharSet = "utf-8";           
                         $mail->SMTPDebug = 3;          
                $mail->SMTPOptions = array(
                                                      'ssl' => array(
                                                      'verify_peer' => false,
                                                      'verify_peer_name' => false,
                                                      'allow_self_signed' => true));

            $mail->SMTPAuth = false; 
            $mail->SMTPSecure = false;          
            $mail->Host = 'localhost';
            $mail->Port = 25; 

$mail->Username = "ventas@ketmedical.com.mx";
$mail->Password = "Ketmed2021=";
$mail->SetFrom('ventas@ketmedical.com.mx', 'Confirmación de Pedido Ket');
$mail->addAddress('rodolfo.ruiz@live.com', 'Confirmación de Pedido Ket');
 $mail->addAddress($email, 'Confirmación de Pedido Ket');
 $mail->addAddress('ventas@ketmedical.com.mx', 'Confirmación de Pedido Ket');

$mail->IsSMTP();

$mail->IsHTML(true);


$asunto= 'Confirmación de tu pedido de Ket ';
$body= 'Gracias por tu compra, nos pondremos en contacto en un plazo máximo de 24 horas para agendar la fecha y hora de tu cita.  <br/> Garantizamos encontrar un espacio que se adapte a tus necesidades. <br/>  Podrás comunicarte con nuestros asesores para programar una cita en el horario y fecha que elijas, siempre que sea dentro de los horarios establecidos por los médicos. <br/> Si tienes alguna pregunta, no dudes en ponerse en contacto con nosotros.  ';

$mail->Subject ='Confirmación de tu pedido de Ket ';

$mail->Body    = 'Gracias por tu compra, nos pondremos en contacto en un plazo máximo de 24 horas para agendar la fecha y hora de tu cita.  <br/> Garantizamos encontrar un espacio que se adapte a tus necesidades. <br/>  Podrás comunicarte con nuestros asesores para programar una cita en el horario y fecha que elijas, siempre que sea dentro de los horarios establecidos por los médicos. <br/> Si tienes alguna pregunta, no dudes en ponerse en contacto con nosotros.  ';

//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

echo 
"<div display='none'>
    <script type='text/javascript'>
        console.log('console log message');
    </script>
</div>";

 $stmt= $conn->prepare("insert INTO ket_ventas (SELECT '',:IdPayPalPago, curdate(), 
    id_usuario,id_doctor,id_paquete,cantidad,precio_u,total,:idPaypal ,:iddr,:nombre,:telefono,:email,:apellido
    from ket_auxpedidos where IdSession=:iddr)");

            $stmt->bindParam(":IdPayPalPago",$IdPayPalPago,PDO::PARAM_STR);
            $stmt->bindParam(":idPaypal",$idPaypal,PDO::PARAM_STR);
            $stmt->bindParam(":iddr",$iddr,PDO::PARAM_STR);
         $stmt->bindParam(":nombre",$nombre,PDO::PARAM_STR);
            $stmt->bindParam(":telefono",$telefono,PDO::PARAM_STR);
            $stmt->bindParam(":email",$email,PDO::PARAM_STR);
          $stmt->bindParam(":apellido",$apellido,PDO::PARAM_STR);
         
        

            if ($stmt->execute())
            {
                $resultado = "success";
                                 $stmt= $conn->prepare("Delete from ket_auxpedidos where IdSession=:iddr ");
                                 $stmt->bindParam(":iddr",$iddr,PDO::PARAM_STR);
                                  if ($stmt->execute())
                                    {
                                        $resultado = "success";
                                    }
            }
            else
            {
                $resultado=  $stmt->errorInfo();

            }


if(!$mail->send()) {
            
           

     echo 'Error'; 
} else {

                $mail = new PHPMailer(true);
                $mail->isSMTP(); 
            $mail->CharSet = "utf-8";           
                         $mail->SMTPDebug = 3;          
                $mail->SMTPOptions = array(
                                                      'ssl' => array(
                                                      'verify_peer' => false,
                                                      'verify_peer_name' => false,
                                                      'allow_self_signed' => true));

            $mail->SMTPAuth = false; 
            $mail->SMTPSecure = false;          
            $mail->Host = 'localhost';
            $mail->Port = 25; 

          
            $mail->Username = "ventas@ketmedical.com.mx";
        $mail->Password = "Ketmed2021=";
        $mail->SetFrom('ventas@ketmedical.com.mx', 'Confirmación de Pedido Ket');
            $mail->addAddress('rodolfo.ruiz@live.com', 'Confirmación de Pedido Ket');
         $mail->addAddress($email, 'Confirmación de Pedido Ket');
            // $mail->addAddress($email, 'ToEmail');
            $mail->IsSMTP();
            $mail->IsHTML(true);

           
$asunto= 'Confirmación de tu pedido de Ket ';
$body= 'Gracias por tu compra, nos pondremos en contacto en un plazo máximo de 24 horas para agendar la fecha y hora de tu cita.  <br/> Garantizamos encontrar un espacio que se adapte a tus necesidades. <br/>  Podrás comunicarte con nuestros asesores para programar una cita en el horario y fecha que elijas, siempre que sea dentro de los horarios establecidos por los médicos. <br/> Si tienes alguna pregunta, no dudes en ponerse en contacto con nosotros.  ';

$mail->Subject ='Confirmación de tu pedido de Ket ';

$mail->Body    = 'Gracias por tu compra, nos pondremos en contacto en un plazo máximo de 24 horas para agendar la fecha y hora de tu cita.  <br/> Garantizamos encontrar un espacio que se adapte a tus necesidades. <br/>  Podrás comunicarte con nuestros asesores para programar una cita en el horario y fecha que elijas, siempre que sea dentro de los horarios establecidos por los médicos. <br/> Si tienes alguna pregunta, no dudes en ponerse en contacto con nosotros.  ';

            if(!$mail->send()) {

            }
            else
            {
                
            }
  
    // $stmt= $conn->prepare("Insert INTO events (title,image,description,start,end,url,color,hora) values 
    //             (:title,:image,:description,:start,:end,:url,:color,:hora)");

    //        $stmt->bindParam(":title",'Cita',PDO::PARAM_STR);
    //         $stmt->bindParam(":image",'',PDO::PARAM_STR);
    //         //$stmt->bindParam(":edad",$edad,PDO::PARAM_STR);
    //         $stmt->bindParam(":description",$body,PDO::PARAM_STR);
    //         $stmt->bindParam(":start",$start2,PDO::PARAM_STR);
    //         $stmt->bindParam(":end",$end,PDO::PARAM_STR);
    //         $stmt->bindParam(":url",$asunto,PDO::PARAM_STR);
    //         $stmt->bindParam(":color",'#5367ce',PDO::PARAM_STR);
    //         $stmt->bindParam(":hora",$horacita,PDO::PARAM_STR);
           
        

    //         if ($stmt->execute())
    //         {
    //             $resultado = "success";
    //         }
    //         else
    //         {
    //             $resultado= "failed";

    //         }

             echo 'success';



}
 restore_error_handler();

/*
if (isset($email) && isset($name) && isset($msg)) {
    $email_subject = "$name realizo una cita para un estudio de laboratorio"; // ENTER YOUR EMAIL SUBJECT
		$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: contacto <registro2@moscati.com.mx>\r\n"."Reply-To: ".$email."\r\n" ;
$msg     = "Departamento: $department <br/> Estudio: $doctor <br/> Tipo de paciente: $patient <br/> Fecha de cita:  $date <br/> Nombre de paciente: $name <br/>  Email: $email <br/> Telefono de contacto: $phone <br/> Mensaje Adicional: $msg";
	
   $mail =  mail($to, $email_subject, $msg, $headers);
  if($mail)
	{
		echo 'success';
	}

else
	{
		echo 'failed';
	}*/
//}

?>