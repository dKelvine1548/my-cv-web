<?php

    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    
    //Load Composer's autoloader
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';
    require '../PHPMailer/src/Exception.php';

    use PHPMailer\PHPMailer\PHPMailer;
    //use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;


    require_once '../dompdf/src/Dompdf.php';
    use Dompdf\Dompdf;
    
    //Generate pdf
    $filename = md5(rand()) . '.pdf';
    $html_code = '<link rel="stylesheet" href="../style.css">';
    ob_start();
    require '../index.php';
    $html_code.= ob_get_contents();
    ob_end_clean(); 
    $dompdf = new Dompdf();
    //$dompdf->load_html( $html_code);
    //$dompdf->render();
    $file = $dompdf->output();
    file_put_contents($filename, $file); 


    //send email
    session_start();
    
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    if(isset($_POST["adresseMail"])){
        $destination_mail = $_POST["adresseMail"];
    
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
        
            $mail->wordwrap = 50;
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Ceci est mon cv';
            $mail->addAttachment($filename);
            $mail->Body = 'Svp veuillez consulter mon cv ';
 
            // ob_start();
            // require '../index.php';
            // $body = ob_get_contents();
            // ob_end_clean(); 

            // $mail->Body = $body; 
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients'; 

            $_SESSION["message"] = " "; 
            if(!$mail->send()){
                echo $_SESSION["message"] = "Erreur!"; 
                unlink($filename);
                //header("location: ../index.php"); 
            }
            
            else{
                echo $_SESSION["message"] = '<h5 style= "color:green;" >Message envoyé avec succès</h5>';
                
                //header("location: ../index.php");
            }
            
        } catch (Exception $e) {
            echo  $_SESSION["message"]= "Message non envoyé. Mailer Error: {$mail->ErrorInfo}";
            //header("location: ../index.php");
        }
    }else{
        echo $message = "Veuillez renseigner votre adresse mail"; 
    }
?>