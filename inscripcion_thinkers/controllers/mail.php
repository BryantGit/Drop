<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    //con los archivos en la carpeta
    require './controllers/phpMailer/Exception.php';
    require './controllers/phpMailer/PHPMailer.php';
    require './controllers/phpMailer/SMTP.php';
    //con composer
    //require 'vendor/autoload.php';
    if(isset($_POST['enviar'])){
        if (strlen($_POST['nombre']) >= 1 /**sentencia que verifica si los campos estan vacios */
        && strlen($_POST['email']) >= 1
        ) {
            $nombre = trim($_POST['nombre']);
            $email = trim($_POST['email']);
            $mail = new PHPMailer(true);
            try {
                //Server settings
                $mail->SMTPDebug = 0;//desactivado: 0, activado:2  
                $mail->isSMTP();                                            
                $mail->Host       = 'smtp.gmail.com';                     
                $mail->SMTPAuth   = true;                                   
                $mail->Username   = 'correo';//quien lo va amandar               
                $mail->Password   = 'clave';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                //Recipients
                $mail->setFrom('bryantgmr@gmail.com', 'Thinkers'); //mi correo y mi usuario
                $mail->addAddress($email, 'Bryant Ponce');//a quien se le enviara
                /* $mail->addAddress('ellen@example.com');               //Name is optional
                 $mail->addReplyTo('info@example.com', 'Information');
                 $mail->addCC('cc@example.com');
                 $mail->addBCC('bcc@example.com');
                 por si quiero mandar imagenes o archivos, etc.
                 $mail->addAttachment('/var/tmp/file.tar.gz');         
                 $mail->addAttachment('/tmp/image.jpg', 'new.jpg');*/


                
                 //Content
                $mail->isHTML(true); //Correo con formato html
                $mail->Subject = 'Asunto: ';
                $mail->Body    = 'Hola este es un correo de prueba';
                //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                $mail->send();
                echo 'el mensaje se envio correctamente';
            } catch (Exception $e) {
                echo "Hubo un error al enviar el mensaje: {$mail->ErrorInfo}";
            }
        }else{
            ?>
            <h1>complete los campos</h1>
            <?php
        }
      
   }
    
    

?>