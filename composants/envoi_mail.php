<?php
    
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    
    //Load Composer's autoloader
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';
    require '../PHPMailer/src/Exception.php';
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    if(isset($_GET["adresseMail"])){
        $destination_mail = $_GET["adresseMail"];
    
    try { 
        //Server settings
        $mail->SMTPDebug = 3;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'djokouokelvine@gmail.com';                     //SMTP username
        $mail->Password   = 'Seigneur!1';                               //SMTP password
        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        $mail->Port       = 25;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
        );
        //Recipients
        $mail->setFrom('djokouokelvine@gmail.com', 'Kelvine Djokouo');
        $mail->addAddress($destination_mail);     //Add a recipient
        //$mail->addAddress('ellen@example.com');               //Name is optional
        //$mail->addReplyTo('djokouokelvine@gmail.com', 'Kelvine Djokouo');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
    
        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}else{
    echo 'yich,bv;:fkytioèdytdr';
}
?>