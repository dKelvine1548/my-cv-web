<?php

// require '../PHPMailer/src/Exception.php';
// require '../PHPMailer/src/PHPMailer.php';
// require '../PHPMailer/src/SMTP.php';
// use PHPMailer\PHPMailer\PHPMailer;


    $annee_naissance="15 janvier 1990";  
    $region_origine="ouest";  
    $statut_matrimonial="Célibataire"; 
    $quartier="Logbessou";  
    $ville="Douala";  
    $pays="Cameroun";   
    $sante="RAS";   
    $longitude="4.053276";
    $latitude="9.765047";   
    $telephone="(237) 657 282 848";
    $reseau_social= array("Mobile", "Telegram", "Whatsapp");
    $arr_reseau_social_String = implode(", ", $reseau_social);
    $email="djokouokelvine@gmail.com";
    $reseau_social_travail= array("Google+", "Twitter", "Linkedin", "Github");
    $arr_reseau_social_travail_String = implode(", ", $reseau_social_travail);
    $projet=45;
    $contrat=31;
    $anne_experience=12;
        
 

      
      //include '../dompdf/src/Dompdf.php';
        
        
        //use PHPMailer\PHPMailer\Exception;

        // use Dompdf\Dompdf;

        
        

    //     $message = '';
    //     $email= "Metier : Architecte logiciel /DevOps";
    //     $filename = md5(rand()) . '.pdf';
    //     //$stylesheet = file_get_contents('../index.php'); // Get css content
    //     $html = '<link rel="stylesheet" href="../style.css">';
    //     $html .= $email;

    //     // Setup PDF
    //     $dompdf = new Dompdf('utf-8', 'A4-L'); // New PDF object with encoding & page size
    //     $dompdf->setAutoTopMargin = 'stretch'; // Set pdf top margin to stretch to avoid content overlapping
    //     $dompdf->setAutoBottomMargin = 'stretch'; // Set pdf bottom margin to stretch to avoid content overlapping
    // //     // PDF header content
    // //     $dompdf->get_canvas() ;
    // //    // PDF footer content                      
    // //     $dompdf->SetHTMLFooter('<div class="pdf-footer">
    // //                             <a href="http://www.lubus.in">www.lubus.in</a>
    // //                         </div>'); 
    //     $dompdf->load_html(utf8_decode($html));
    //     $options = $dompdf->getOptions();
    //     $options->setDefaultFont('Courier');
    //     $dompdf->setOptions($options); // Writing style to pdf
    //     $dompdf->render();
    //     // FOR EMAIL
    //     $content = $dompdf->Output('', 'S'); // Saving pdf to attach to email 
    //     file_put_contents($filename, $content);
        //$content = chunk_split(base64_encode($content));



        // Email settings

        // $mail = new PHPMailer;
        // $mail-> isSMTP();
        // $mail->Host = 'smtp.example.com';
        // $mail->Port = '587';
        // $mail->SMTPAuth = true;
        // $mail->Username = 'djokouokelvine@gmail.com';
        // $mail->Password = 'Seigneur!1';
        // $mail->SMTPSecure = 'tls';


        // $mail->From = 'djokouokelvine@gmail.com';
        // $mail->FromName = 'Kelvine Djokouo';
        // $mail->addAddress('djokouokelvine@gmail.com');
        
        // //$mail->WordWrap = 50;
        // $mail-> Subject = 'My Cv';

        // $mail->IsHTML(true);

        // $mailContent = '<h2>Send HTML Email using SMTP Server in PHP</h2> 
        // <p>It is a test email by CodexWorld, sent via SMTP server with PHPMailer using PHP.</p>'; 
        
        // //$mail-> AddAttachment('../img/fleur.jpg', 'fleur.jpg');

        // $mail->Body = $mailContent;
        // $message='';

        // if(!$mail-> Send()){
        //     $message = '<label for="">Echec d\'envoi d\'email. Erreur: </label>'. $mail->ErrorInfo;    
        // }else{
        //     $message = 'Message envoyé'; 
        // }

        
       // unlink($filename);
        
        

        // $mailto = "djokouokelvine@gmail.com";
        // $from_name = 'Djokouo kelvine';
        // $from_mail = 'djokouokelvine@gmail.com';
        // $replyto = 'djokouokelvine@gmail.com';
        // $uid = md5(uniqid(time())); 
        // $subject = 'cv en PDF';
        // $message = 'Télécharger mon cv pdf';
        

        // $header = "From: ".$from_name." <".$from_mail.">\r\n";
        // $header .= "Reply-To: ".$replyto."\r\n";
        // $header .= "MIME-Version: 1.0\r\n";
        // $header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";
        // $header .= "This is a multi-part message in MIME format.\r\n";
        // $header .= "--".$uid."\r\n";
        // $header .= "Content-type:text/plain; charset=iso-8859-1\r\n";
        // $header .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
        // $header .= $message."\r\n\r\n";
        // $header .= "--".$uid."\r\n";
        // $header .= "Content-Type: application/pdf; name=\"".$filename."\"\r\n";
        // $header .= "Content-Transfer-Encoding: base64\r\n";
        // $header .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
        // $header .= $content."\r\n\r\n";
        // $header .= "--".$uid."--";
        // $is_sent = @mail($mailto, $subject, "", $header);

        // //$mpdf->Output(); // For sending Output to browser
        // $dompdf->Output('cv.pdf','D'); // For Download
        // exit;
    

?>





<!-- modal formular -->
<div class="modal fade" id="exampleModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Envoyer un message</h5>
            </div>
            <div class="modal-body">
                <form method="post" action="composants/envoi_mail.php">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Adresse mail:</label>
                        <input type="text" class="form-control" id="recipient-name" name="adresseMail">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5><?echo $_SESSION["message"]?></h5>
            </div>
        </div>
    </div>
</div>


<script> 
    function display(){
        var myModal = new bootstrap.Modal(document.getElementById("exampleModal2"));
        //var myModal2 = new bootstrap.Modal(document.getElementById("exampleModal")) 
        myModal.show();
    }
</script>



<div class="coordonnees">

    <div class="deux-buttons" id="DeuxButtons">
        <button class="btn-envoyer" id="btn-email" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img src="../img/mail_filled_30px.png" alt="" class="icon" id="small-icon">
        </button>

        <button class="btn-envoyer" id="btn-send" type="submit">
            <img src="../img/downloading_updates_26px.png" alt="" class="icon" id="small-icon">
        </button>

    </div>

    <button class="btn-envoyer" onclick="showDiv();" id="button-click">
        <img src="../img/share_30px.png" alt="" class="icon">
    </button>

    <script>
        function showDiv() {
            var maDiv = document.getElementById('DeuxButtons');

            //get the current value of div's  diasplay property
            var displaySetting = maDiv.style.display;

            //get the id of button that will display our div's button
            var monButton = document.getElementById('button-click');

            if (displaySetting == 'block') {
                maDiv.style.display = 'none';
                monButton.innerHTML = "<img src=\'../img/share_30px.png'  class =\'icon\'>"
                
            } else {
                maDiv.style.display = 'block';
                monButton.innerHTML = "<img src=\'../img/multiply_24px.png'  class =\'icon\'>";
            }
            
        }
    </script>


    <div class="infos-perso">
        <div class="bloc">
            <img src="img/birthday_cake_30px.png" alt="" class="icon-infos">
            <div class="infos">
                <strong>
                    <p>Née le <?php echo $annee_naissance ?></p>
                    <p>Originaire de l'<?php echo $region_origine." ".$pays?> </p>
                    <p><?php echo $statut_matrimonial ?> - Santé <?php echo $sante ?></p>
                </strong>
                <hr class="trait">
            </div>

        </div>
        <div class="bloc">
            <img src="img/location_filled_30px.png" alt="" class="icon-infos">
            <div class="infos">
                <strong>
                    <p>Résident à <?php echo $quartier ?></p>
                    <p><?php echo $ville ?> - <?php echo $pays ?></p>
                    <p>Map
                </strong>: <?php echo $longitude ?>, <?php echo $latitude ?></p>
                <hr class="trait">
            </div>
        </div>
        <div class="bloc">
            <img src="img/phone_30px.png" alt="" class="icon-infos">
            <div class="infos">
                <strong>
                    <p><?php echo $telephone ?></p>
                </strong>
                <p><?php echo $arr_reseau_social_String ?></p>
                <hr class="trait">
            </div>

        </div>
        <div class="bloc">
            <img src="img/mail_filled_30px.png" alt="" class="icon-infos">
            <div class="infos">
                <strong>
                    <p><?php echo $email ?></p>
                </strong>
                <p><?php echo $arr_reseau_social_travail_String ?></p>
            </div>
        </div>
        <div class="projet">
            <strong>+<?php echo $projet ?> projets</strong>
            <p>+<?php echo $contrat ?> contrats</p>
            <p><?php echo $anne_experience ?> ans D'exp</p>

        </div>
    </div>

</div>
<div class="trait-rouge"></div>