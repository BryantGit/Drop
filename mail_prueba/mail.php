<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    //con los archivos en la carpeta
    
    require 'phpMailer/Exception.php';
    require 'phpMailer/PHPMailer.php';
    require 'phpMailer/SMTP.php';
    //con composer
    //require 'vendor/autoload.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;//desactivado: 0, activado:2  //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'bryantgmr@gmail.com';//quien lo va amandat                     //SMTP username
        $mail->Password   = 'Simatropa74';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('bryantgmr@gmail.com', 'Thinkers'); //mi correo y mi usuario
        $mail->addAddress('bip_israel@live.com', 'Bryant Ponce');//a quien se le enviara
        
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //por si quiero mandar imagenes o archivos, etc.
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Correo con formato html
        $mail->Subject = 'Asunto: ';
        $mail->Body    = 'Hola este es un correo de prueba';
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'el mensaje se envio correctamente';
    } catch (Exception $e) {
        echo "Hubo un error al enviar el mensaje: {$mail->ErrorInfo}";
    }

?>